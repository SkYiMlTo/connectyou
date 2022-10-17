<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div id="content">
    <h1>Pas de Base de données finalement...</h1>
    <div class="dialog">
        <img class="robot" src="small-robot.png"/>
        <p class="robot">De quoi on pourrait parler ? Ah tiens, mon nombre préféré est 42. Oui, la réponse à la vie. Et toi c'est lequel ?<br><br>Ah mince, tu peux pas parler. Et tu pourras pas continuer le challenge, le mot de passe est hyper compliqué.<br><br>Attend c'est lequel déjà ? Ah oui, heureusement que j'ai mon pense-bête de côté !</p>
    </div>
    <?php

    if ($_POST["password"] == "azertpokjcsozmncziuizoiufecndkoijfujzdzsakoijuhr") {
        echo "<div class=\"dialog\"><img class=\"robot\" src=\"small-robot.png\"/><p class=\"robot\">Un mot de passe super sécurisé j'ai dit ^^</p></div>";
    }

    else if ($_POST["password"] == "kjobdzyutmcyjwxmjsesjysepomxnuystpetjnjckuysterb") {
        echo "<div class=\"dialog\"><img class=\"robot\" src=\"small-robot.png\"/><p class=\"robot\">Dans l'autre sens !</p></div>";
    }

    else if ($_POST["password"] == "qpuhjfeazsiepcdspykypeykvusdtaeyzvkzptpiqaeyzkxh") {
        header("Location: page5-detrfyguioytdrtfyui552.php");
    }

    ?>
<br>
    <form action="page4-euyruieozpugfeopufjfe1.php" method = "post">
        <?php
        if ($_POST["password"] != "qpuhjfeazsiepcdspykypeykvusdtaeyzvkzptpiqaeyzkxh" and $_POST["password"] != "") {
            echo"<p class=\"error\">Mauvais mot de passe !</p>";
        }
        ?>
    <label for="password">Password:</label> <input type="password" id="password" name="password"><br /><br />
    <button type = "submit">Login</button>
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
        <tr>
            <td class="page"><a href="page3-iffuerifreoifjrekopcde8.php">Authentification 3</a></td>
            <td class="flag">SecDevOps{MonSuperMotDePasseDesEnfers456}</td>
        </tr>
    </table>
</div>
</body>
</html>

