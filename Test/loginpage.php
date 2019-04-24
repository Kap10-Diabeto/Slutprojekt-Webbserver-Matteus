
<!DOCTYPE html>

<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="style.css" rel="stylesheet">
</head>
<body id="blog">
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
        <h2>Inloggning</h2>

        <form action="login.php" method="post">
          <label for="username">Användarnamn:</label>
          <input type="text" id="username" name="user"><br><br>
          <label for="password">Lösenord:</label>
          <input type="password" id="password" name="password"><br><br>
          <input type="submit" value="Logga in">
        </form>

        <button type="submit">Logga ut</button>

    </main>

    <!--Ska ligga i egen fil-->
    <footer>Denna sida är skapad av Kalle för kursen Webbserverprogrammering 1</footer>
  </div>
</body>
</html>
