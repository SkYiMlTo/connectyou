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
        <p class="robot">Oops ^^<br><br>J'avais laissé le mot de passe par défaut...<br><br>Mais c'est rectifié ! Maintenant j'ai une jolie base de données bien propre :D<br><br>Bon... Je commence à douter que c'est bien toi... Je te remets le login si je me suis trompé D:</p>
    </div>
<br>

    <form action="controller-gtregfbdferybfddfh.php?func=loginUser" method = "post">
        <?php
//        if ($_POST["password"] != "MonSuperMotDePasseDesEnfers456" and $_POST["password"] != "") {
//            echo"<p class=\"error\">Mauvais mot de passe !</p>";
//        }
        if ($_GET["error"] == "true") {
            echo "<p class=\"error\">Mauvais mail/pw </p>";
        }
        ?>
        <?php
        if ($_GET["tentativedecasse"] == "true") {
            echo "<p class=\"error\">Mais pourquoi tu veux toujours tout casser ?</p>";
        }
        if ($_GET["interessant"] == "true") {
            echo "<p class=\"error\">Oh interessant, je crois qu'on truc a changé...</p>";
        }
        ?>
        <label for="username">Login:</label> <input type="text" id="username" name="username"><br /><br />
        <label for="password">Mot de passe:</label> <input type="password" id="password" name="password"><br /><br />

        <button type = "submit">Se connecter</button>
    </form>
</div>
<div class="flags">
    <table>
        <tr>
            <td class="page"><a href="index.php">index</a></td>
        </tr>
        <tr>
            <td class="page"><a href="page1-erdtfyuozefizickoecco89.php">Authentification 1</a></td>
            <td class="flag">SecDevOps{dur4nd_g4m1ng}</td>
        </tr>
        <tr>
            <td class="page"><a href="page2-gibregibfrehzifbhu.php">Authentification 2</a></td>
            <td class="flag">SecDevOps{admin}</td>
        </tr>
    </table>
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
    console.log('gg, tu as réussi, le mot de passe admin est : TW9uU3VwZXJNb3REZVBhc3NlRGVzRW5mZXJzNDU2');
    console.log('Enfin presque lmao, gl hf');
    </script>
    ";
}

?>