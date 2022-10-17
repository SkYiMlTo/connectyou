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
        <p class="robot">There was a vulnerability thus I fixed it. Otherwise I just reset the password... Would you try to reconnect ?</p>
    </div>
    <form name="coucou">
        <input type="text" name="pseudo">
    </form>
<button onclick="myFunction()">Connexion</button>
</div>

<script>
    function myFunction() {
        if (document.coucou.pseudo.value==="dur4nd_g4m1ng") {
            location.replace("page2-gibregibfrehzifbhu.php");

        }

    }
</script>

</body>
</html>