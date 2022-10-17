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

<div class="flags">
    <table>
        <tr>
            <td class="page"><a href="index.php">index</a></td>
        </tr>
        <tr>
            <td class="page"><a href="page1-erdtfyuozefizickoecco89.php">Authentification 1</a></td>
            <td class="flag">SecDevOps{dur4nd_g4m1ng}</td>
        </tr>
    </table>
</div>
</body>
</html>

<?php

    if ($_POST["password"] == "admin") {
        header("Location: page3-iffuerifreoifjrekopcde8.php");
    }

?>