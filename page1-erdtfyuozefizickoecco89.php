<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <link href="style.css" rel="stylesheet">
</head>
<body>

<div id="content">
    <h1>Authentification</h1>
    <div class="dialog">
        <img class="robot" src="small-robot.png"/>
        <p class="robot">Rien de très sorcier... il faut juste se connecter...</p>
    </div>
    <br>

    <form name="coucou" method="post">
        <?php
        if ($_POST["password"] != "dur4nd_g4m1ng" and $_POST["password"] != "") {
            echo"<p class=\"error\">Mauvais mot de passe !</p>";
        }
        ?>
        <label for="password">Mot de passe:</label> <input type="password" id="password" name="password"><br /><br />
        <button type = "submit">Se connecter</button>
    </form>
</div>

<div class="flags">
    <table>
        <tr>
            <td class="pages"><a href="index.php">index</a></td>
        </tr>
    </table>
</div>

<script>
    if ('<?=$_POST['password']?>'==="dur4nd_g4m1ng") {
        location.replace("page2-gibregibfrehzifbhu.php");
    }
</script>

</body>
</html>