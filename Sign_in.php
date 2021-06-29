
<html>
<head>
  <link rel="stylesheet" href="main.css">
</head>
<?php
$dbOk = false;

/* Create a new database connection object, passing in the host, username,
   password, and database to use. The "@" suppresses errors. */
@ $db = new mysqli('localhost', 'root', '', 'buggle');

if ($db->connect_error) {
  echo '<div class="messages">Could not connect to the database. Error: ';
  echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
} else {
  $dbOk = true;
}
$result= $db->query("select * FROM user_list WHERE Username="."'".$_POST['username']."'"."and Password=" ."'".$_POST['pwd']."'");
$row=$result->fetch_assoc();
if(is_null($row)){
  header('Location: index.html');
}
else{
  echo '<body></body>';
}
//checks the username and password
?>

</html>
