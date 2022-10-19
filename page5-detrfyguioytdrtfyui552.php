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
    setcookie("BoringCookie","", -1);
    setcookie("AdminCookie","ChadGranola-gjgsvdgiqvfgys", time() + 1);
    echo " ADMIN ";
}


?>

<div id="content">
    <h1>Tu avances bien... </h1>
    <div class="dialog">
        <img class="robot" src="small-robot.png"/>
        <p class="robot">Tu as eu du courage ! :D<br>Malgré tout, tu as dû chercher le mot de passe dans les dossiers. Moi je pensais que tu le connaissais ! D:</p>
        <br>
    </div>

    <form action="page5-detrfyguioytdrtfyui552.php" method = "post"><!-- password == admin cookie -->
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
        <p class="robot">Au fait, j'en ai profité pour ajouter une boîte de dialogue vu que tu ne pouvais pas parler ^^</p>
    </div>
    <?php
    //if ($_GET["bhjkqsbdd"]  == "eibrvfhekhrbebr"){ sleep(10);}
    if ($_GET["ebrfvoehr"] != "") {
        //echo "<div class=\"dialog\"><img class=\"robot\" src=\"user.png\"/> <p class=\"robot\">".decodeURI($_GET["ebrfvoehr"])."</p></div>";
        if ($_GET["bhjkqsbdd"]  == "eibrvfhekhrbebr"){
            echo "<div class=\"dialog\"><img class=\"robot\" src=\"user.png\"/> <p class=\"robot\">".base64_decode($_GET["ebrfvoehr"])."</p></div>";
        }
        else{
            echo "<div class=\"dialog\"><img class=\"robot\" src=\"user.png\"/> <p class=\"robot\">".$_GET["ebrfvoehr"]."</p></div>";
        }
    }
    ?>
    <br>
    <form action="page5-detrfyguioytdrtfyui552.php" method="get">
        <textarea name="ebrfvoehr" rows="5" cols="80" class="discussionAvecLeBot"></textarea>
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
        <tr>
            <td class="page"><a href="page2-gibregibfrehzifbhu.php">Authentification 2</a></td>
            <td class="flag">SecDevOps{admin}</td>
        </tr>
        <tr>
            <td class="page"><a href="page3-iffuerifreoifjrekopcde8.php">Authentification 3</a></td>
            <td class="flag">SecDevOps{MonSuperMotDePasseDesEnfers456}</td>
        </tr>
        <tr>
            <td class="page"><a href="page4-euyruieozpugfeopufjfe1.php">Authentification 4</a></td>
            <td class="flag">SecDevOps{Pr15_3N_FL4G_gg_ez}</td>
        </tr>
    </table>
</div>

<?php
if ($_GET["bhjkqsbdd"]  == "eibrvfhekhrbebr"){
// close session
    //echo "<script type=\"text/javascript\">\"window.close();\";</script>";
    ////echo "<script type=\"text/javascript\">setTimeout(\"window.close();\", 10);</script>";
}
?>

</body>
</html>
<?php

if ($_GET["bhjkqsbdd"] == "zekfgerzfgieavrv"){ // false
    setcookie("BoringCookie","VirginCookie", time() + 1);
    echo "<iframe style=\"position: absolute; width:0; height:0; border:0;\" src='page5-detrfyguioytdrtfyui552.php?ebrfvoehr=".base64_encode($_GET["ebrfvoehr"])."&bhjkqsbdd=eibrvfhekhrbebr'></iframe>";
    //echo "<script type=\"text/javascript\">window.open(window.location.toString().concat('&bhjkqsbdd=eibrvfhekhrbebr'), '_blank', popup=true);window.resizeTo(0,0); window.moveTo(0,window.screen.availHeight+10);</script>";
}

if ($_POST["password"] == "ChadGranola-gjgsvdgiqvfgys") {
    header("Location: content-jlhqrbfhebhrbueob.php");
}

?>
