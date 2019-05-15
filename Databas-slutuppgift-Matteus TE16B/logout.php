<?php
session_start();
session_destroy();
//skickar dig till en sida där du loggas ut efter 1 sekund!
 ?>

 <!DOCTYPE html>
<html>
<head>
  <title>Logging out...</title>
  <meta http-equiv="refresh" content="1;url=loginpage.php"/>
</head>
<body>
</body>
</html>
