
<html>
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
//$sql='select id, username, password FROM user_list WHERE username='.$_POST['username']. ' and password='.$_POST['pwd'] ;
$result= $db->query("select * FROM user_list WHERE Username="."'".$_POST['username']."'"."and Password=" ."'".$_POST['pwd']."'");
$row=$result->fetch_assoc();
echo $row['id'];
//echo $sql;
?>
</html>
