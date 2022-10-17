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
        <p class="robot">Oops ^^<br><br>J'avais laissé le mot de passe par défaut...<br><br>Mais c'est rectifié ! Maintenant j'ai une jolie base de données bien propre :D</p>
    </div>
<br>
    <form action="page3-iffuerifreoifjrekopcde8.php method = "post">
    <?php
    if ($_POST["password"] != "MonSuperMotDePasseDesEnfers456" and $_POST["password"] != "") {
        echo"<p class=\"error\">Mauvais mot de passe !</p>";
    }
    ?>
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
        <tr>
            <td class="page"><a href="page2-gibregibfrehzifbhu.php">Authentification 2</a></td>
            <td class="flag">SecDevOps{admin}</td>
        </tr>
    </table>
</div>
</body>
</html>
