<!DOCTYPE html>
<html>
<body>

<h3>De quoi on pourrait parler ? Ah tiens, mon nombre préféré est 42. Oui, la réponse à la vie. Et toi c'est lequel ?</h3>
<h3>Ah mince, tu peux pas parler. Et tu pourras pas continuer le challenge, le mot de passe est hyper compliqué.</h3>
<h3>Attend c'est lequel déjà ? Ah oui, heureusement que j'ai mon pense-bête de côté !</h3>

<form action="page4-euyruieozpugfeopufjfe1.php" method = "post">
    <label for="password">Password:</label> <input type="text" id="password" name="password"><br /><br />
    <button type = "submit">Login</button>
</form>

</body>
</html>

<?php

if ($_POST["password"] == "azertpokjcsozmncziuizoiufecndkoijfujzdzsakoijuhr") {
    echo "<script>alert(\"Aaaah presque !\")</script>";
}

else if ($_POST["password"] == "kjobdzyutmcyjwxmjsesjysepomxnuystpetjnjckuysterb") {
    echo "<script>alert(\"Dans l'autre sens !\")</script>";
}

else if ($_POST["password"] == "qpuhjfeazsiepcdspykypeykvusdtaeyzvkzptpiqaeyzkxh") {
    header("Location: page5-detrfyguioytdrtfyui552.php");
}

?>