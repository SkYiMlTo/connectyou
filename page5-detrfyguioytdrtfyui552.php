<!DOCTYPE html>
<html>
<body>

<h3>Tu avances bien... Mais au juste, qui es-tu ? Tu peux te présenter ?</h3>

<form action="page5-detrfyguioytdrtfyui552.php" method="post">
    <textarea name="message" rows="5" cols="80"></textarea>
    <input type="submit" name="bouton">
</form>

</body>
</html>

<?php

    $button = $_POST["bouton"];

    $message = $_POST["message"];

    if ($button) {
        session_start();
        setcookie("ADMIN_COOKIE", "Gr4n0la");
    }


    $message = $_POST["message"];


?>