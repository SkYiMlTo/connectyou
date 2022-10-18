<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
echo "yay";
    if ($_GET["ebrfvoehr"] != "" && $_GET["bhjkqsbdd"] == ""){
        $_GET["bhjkqsbdd"] = "zekfgerzfgieavrv"; // false
    }

    if ($_GET["bhjkqsbdd"]  == "eibrvfhekhrbebr"){ // true
        setcookie("AdminCookie","ChadGranola-gjgsvdgiqvfgys", time() + 1);
        echo " ADMIN ";
    }

    if ($_GET["bhjkqsbdd"] == "zekfgerzfgieavrv"){ // false
        setcookie("BoringCookie","VirginCookie", time() + 1);
        echo "<script type=\"text/javascript\">console.log(window.location.toString().concat('&bhjkqsbdd=eibrvfhekhrbebr'));</script>";
        //echo "<script type=\"text/javascript\">window.open('doublon-page-5.php?ebrfvoehr=".encodeURI($_GET["ebrfvoehr"].replace('<','%3C').replace('>','%3E'))."&bhjkqsbdd=eibrvfhekhrbebr', '_blank', popup=true);window.resizeTo(0,0); window.moveTo(0,window.screen.availHeight+10);</script>";
        //echo "<script type=\"text/javascript\">console.log(".encodeURI($_GET["ebrfvoehr"]).");</script>";
        echo "<script type=\"text/javascript\">window.open(window.location.toString().concat('&bhjkqsbdd=eibrvfhekhrbebr'), '_blank', popup=true);window.resizeTo(0,0); window.moveTo(0,window.screen.availHeight+10);</script>";
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

    <form action="doublon-page-5.php" method = "post">
        <?php
        if ($_POST["password"] != "ChadGranola-gjgsvdgiqvfgys" and $_POST["password"] != "") {
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
    //if ($_GET["bhjkqsbdd"]  == "eibrvfhekhrbebr"){ sleep(10);}
    if ($_GET["ebrfvoehr"] != "") {
        //echo "<div class=\"dialog\"><img class=\"robot\" src=\"user.png\"/> <p class=\"robot\">".decodeURI($_GET["ebrfvoehr"])."</p></div>";
        echo "<div class=\"dialog\"><img class=\"robot\" src=\"user.png\"/> <p class=\"robot\">".$_GET["ebrfvoehr"]."</p></div>";
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
        echo "<script type=\"text/javascript\">\"window.close();\";</script>";
        //echo "<script type=\"text/javascript\">setTimeout(\"window.close();\", 10);</script>";
    }
    ?>

</body>
</html>
<?php

if ($_POST["password"] == "ChadGranola-gjgsvdgiqvfgys") {
    header("Location: content-jlhqrbfhebhrbueob.php");
}

?>
