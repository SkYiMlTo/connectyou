<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
    if ($_GET["ebrfvoehr"] != "" && $_GET["bhjkqsbdd"] == ""){
        $_GET["bhjkqsbdd"] = "zekfgerzfgieavrv"; // false
    }

    if ($_GET["bhjkqsbdd"]  == "eibrvfhekhrbebr"){ // true
        setcookie("Granola");
        echo " ADMIN ";
    }

    if ($_GET["bhjkqsbdd"] == "zekfgerzfgieavrv"){ // false
        setcookie("SuperWeakCookie");
        echo "<script type=\"text/javascript\">window.open('doublon-page-5.php?ebrfvoehr=".$_GET["ebrfvoehr"]."&bhjkqsbdd=eibrvfhekhrbebr', '_blank', popup=true);window.resizeTo(0,0); window.moveTo(0,window.screen.availHeight+10);</script>";
    }
    echo "fin";
?>
<h3>Tu avances bien... </h3>

<div id="content">
    <h1>Oh...</h1>
    <div class="dialog">
        <img class="robot" src="small-robot.png"/>
        <p class="robot">Il y avait une vulnérabilité... Je l'ai corrigée et j'en ai profité pour réinitialiser le mot de passe administrateur. Essaie de te reconnecter :P</p>
        <br>
    </div>

    <form action="page2-gibregibfrehzifbhu.php" method = "post">
        <?php
        if ($_POST["password"] != "admin" and $_POST["password"] != "") {
            echo"<p class=\"error\">Mauvais mot de passe !</p>";
        }
        ?>
        <label for="password">Mot de passe:</label> <input type="password" id="password" name="password"><br /><br />
        <button type = "submit">Se connecter</button>
    </form>
    <div class="dialog">
        <img class="robot" src="small-robot.png"/>
        <p class="robot">Au fait, j'ai ajouté une boîte de dialogue, je m'ennuie un peu... Tu n'es pas très bavard ^^</p>
    </div>
    <?php
    if ($_GET["ebrfvoehr"] != "") {
        echo "<div class=\"reversedDialog\"><p class=\"robot\">".$_GET["ebrfvoehr"]."</p><img class=\"robot\" src=\"user.png\"/> </div>";
    }
    ?>
    <br>
    <form action="doublon-page-5.php" method="get">
        <textarea name="ebrfvoehr" rows="5" cols="80"></textarea>
        <input type="submit" name="bouton">
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

<?php
    if ($_GET["bhjkqsbdd"]  == "eibrvfhekhrbebr"){
// close session
        echo "<script type=\"text/javascript\">setTimeout(\"window.close();\", 1000);</script>";
    }
    ?>

</body>
</html>

