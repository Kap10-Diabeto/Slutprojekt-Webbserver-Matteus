<?php
  session_start();

  if(isset($_POST['user'])){

    include_once("db.php");
    $username = strip_tags($_POST['user']);
    $password = strip_tags($_POST['password']);

    $username = stripslashes($username);
    $password = stripslashes($password);

    $username = mysqli_real_escape_string($db, $username);
    $password = mysqli_real_escape_string($db, $password);

    $password = md5($password);
    echo $password;

    $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $query = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($query);
    $id = $row['id'];
    $db_password = $row['password'];

    if($password == $db_password){
      $_SESSION['user'] = $username;
      $_SESSION['id'] = $id;
      header("Location:post.php");

    } else {
      echo "Fel Lösenord";
    }


  }



 ?>
