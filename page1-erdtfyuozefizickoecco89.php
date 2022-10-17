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
        <p class="robot">Rien de très sorcier... il faut jsute se connecter...</p>
        <br>
    </div>
    <form name="coucou" method="post">
        <label for="password">Mot de passe:</label> <input type="password" id="password" name="password"><br /><br />
        <button type = "submit">Se connecter</button>
    </form>
</div>

<script>
    /*function myFunction() {
        if (document.coucou.pseudo.value==="dur4nd_g4m1ng") {
            location.replace("page2-gibregibfrehzifbhu.php");
        }
    }*/
    console.log("test")
    console.log('<?=$_POST['password']?>');
    console.log("test")
    if ('<?=$_POST['password']?>'==="dur4nd_g4m1ng") {
        location.replace("page2-gibregibfrehzifbhu.php");
    }
</script>

</body>
</html>