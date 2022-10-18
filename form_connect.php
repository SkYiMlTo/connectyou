<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div id="content">
    <h1>N'allons pas trop vite...</h1>
    <div class="dialog">
        <img class="robot" src="small-robot.png"/>
        <p class="robot">Oops ^^</p>
    </div>
    <div class="dialog">
        <img class="robot" src="small-robot.png"/>
        <p class="robot">J'avais laissé le mot de passe par défaut...</p>
    </div>
    <div class="dialog">
        <img class="robot" src="small-robot.png"/>
        <p class="robot">Mais c'est rectifié ! Maintennat j'ai une jolie base de données bien propre :D</p>
    </div>
    <br />

    <form action="controller-gtregfbdferybfddfh.php?func=loginUser" method = "post">
        <label for="username">Login:</label> <input type="text" id="username" name="username"><br /><br />
        <label for="password">Mot de passe:</label> <input type="text" id="password" name="password"><br /><br />
        <?php
        if ($_GET["error"] == "true") {
            echo "Mauvais mail/pw <br /><br />";
        }
        if ($_GET["tentativedecasse"] == "true") {
            echo "Mais pourquoi tu veux toujours tout casser ?<br /><br />";
        }
        if ($_GET["interessant"] == "true") {
            echo "Ca c'est interessant, je crois qu'on truc a changé...<br /><br />";
        }
        ?>
        <button type = "submit">Se connecter</button>
    </form>
</div>
</body>
</html>

<?php

if ($_POST["password"] == "admin") {
    header("Location: page3-iffuerifreoifjrekopcde8.php");
}

if ($_GET["flag"] == "displayed") {
    echo "
    <script>
    console.log('gg, tu as réussi tu peux valider la page en entrant : TW9uU3VwZXJNb3REZVBhc3NlRGVzRW5mZXJzNDU2');
    console.log('Enfin presque lmao, gl hf');
    </script>
    ";
}

?>