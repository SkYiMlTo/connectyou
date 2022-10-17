<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <link href="style.css" rel="stylesheet">
</head>
<body>

<div id="content">
    <h1>Oh...</h1>
    <div class="dialog">
        <img class="robot" src="small-robot.png"/>
        <p class="robot">Il y avait une vulnérabilité... Je l'ai corrigée et j'en ai profité pour réinitialiser le mot de passe administrateur. Essaie de te reconnecter :P</p>
        <br>
    </div>

    <form action="page2-gibregibfrehzifbhu.php" method = "post">
        <label for="password">Mot de passe:</label> <input type="text" id="password" name="password"><br /><br />
        <button type = "submit">Se connecter</button>
    </form>
</div>
</body>
</html>

<?php

    if ($_POST["password"] == "admin") {
        header("Location: page3-iffuerifreoifjrekopcde8.php");
    }

?>