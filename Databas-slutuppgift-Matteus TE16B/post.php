<?php
session_start();
if(!isset($_SESSION['id'])){
  header("Location: loginpage.php"); //skickar dig till login-sidan ifall du inte är inloggad!
}
?>
<!DOCTYPE html>

<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Mall för slutprojekt</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

  <div id="wrapper">
    <header>
        <h1>Välkommen till najsbloggen!</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Startsida</a></li>
            <li><a href="post.php">Blogg</a></li>
            <li><a href="admin.php">Administration</a></li>
            <li><a href="loginpage.php">Logga in</a></li>
        </ul>
    </nav>

    <main>
      <form action="insert_post.php" method="post" enctype="multipart/form-data">
        <input placeholder="Titel" name="titel" type="text" autofocus size ="48"><br /><br />
        <textarea placeholder="Innehåll" name="content" rows="20" cols="80"></textarea><br />
        <input name="Post" type="submit" value="Skicka">
      </form>
    </main>
    <footer>Denna sidan är skapad av Metus AB</footer>
   </div>
   </body>
   </html>