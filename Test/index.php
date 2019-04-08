<?php
session_start();
include_once("db.php");
$sql = "SELECT * FROM posts ORDER BY id DESC";

$res = mysqli_query($db, $sql) or die(mysqli_error());

$posts = "";

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
             <li><a href="post.php">Blogg</a></li>
             <li><a href="admin.php">Administration</a></li>
             <li><a href="loginpage.php">Logga in</a></li>
         </ul>
     </nav>

     <main>

       <?php

          if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
              $id = $row ['id'];
              $titel = $row ['titel'];
              $content = $row ['content'];
              $date = $row ['date'];


              $posts .= "<div><h2><a href='view_post.php?pid=$id'>$titel</a></h2><h3>$date</h3><p>$content</p></div>";

            }
            echo $posts;
          } else {
              echo "<p>Det finns inga inlägg!</p>";
          }

        ?>

     </main>
     <!--Ska ligga i egen fil-->
     <footer>Denna sidan är skapad av Metus AB</footer>
   </div>
 </body>
 </html>
