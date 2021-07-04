<html>
<?php
if(isset($_POST["made"])){
  $username=$_POST["username"];
  $password=$_POST["pwd"];
  if(!(is_null($username) and is_null($password))){
    @ $db = new mysqli('localhost', 'root', '', 'buggle');

    if ($db->connect_error) {
      echo '<div class="messages">Could not connect to the database. Error: ';
      echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
    } else {
      $dbOk = true;
    }

    $result= $db->query("select * FROM user_list WHERE Username="."'".$_POST['username']"");
    $row=$result->fetch_assoc();
    if(is_null($row)){
      $last_val=$db->insert_id;


    }
    else{
      echo "<p>Username is taken</p>"
    }

  }
  else{
    echo "<p>Please fill out all the fields</p>"
  }



}

?>
<head>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <h1>Login</h1>
      <form method="post">
       <table>
        <tr>
         <td>Username</td> <td><input type="text" name="username"></td><br>
        </tr>
        <tr>
         <td>Password</td> <td><input type="password" name="pwd"></td><br>
        </tr>
        <tr>
         <td>
           <input type="submit" name="made" value="Creat Account">
        </td>
        </tr>
       </table>

      </form>
</body>
</html>
