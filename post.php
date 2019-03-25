<?php
session_start();
include_once("db.php");

if(isset($_POST['post'])){
$title = strip_tags($_POST['post']);
$content = strip_tags($_POST['content']);

$title = mysqli_real_escape_string($db, $title);
$content = mysqli_real_escape_string($db, $content);


$date = date('l jS \of F Y h:i:s A');

$sql = "INSERT into posts (titel, content, date) VALUES ('$title', '$content', '$date')";

if($title == "" || $content ==""){
  echo "Alla fält ej ifyllda!";
  return;
}

mysqli_query($db, $sql);

header("Location: index.php");

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
    <!--Ska ligga i egen fil-->
    <header>
        <h1>Välkommen till najsbloggen!</h1>
    </header>

    <!--Ska ligga i egen fil-->
    <nav>
        <ul>
            <li><a href="index.php">Startsida</a></li>
            <li><a href="blog.php">Blogg</a></li>
            <li><a href="">Administration</a></li>
            <li><a href="">Logga in</a></li>
        </ul>
    </nav>

    <main>
      <form action="post.php" method="post" enctype="multipart/form-data">
        <input placeholder="Titel" name="titel" type="text" autofocus size ="48"><br /><br />
        <textarea placeholder="Innehåll" name="innehåll" rows="20" cols="80"></textarea><br />
        <input name="Post" type="submit" value="Skicka">
      </form>
    </main>
    <!--Ska ligga i egen fil-->
    <footer>Denna sidan är skapad av Metus AB</footer>
   </div>
   </body>
   </html>
