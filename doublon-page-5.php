<!DOCTYPE html>
<html>
<body>
<?php
    echo "admin";
    echo $_POST["admin"];
    echo "msg";
    echo $_POST["message"];

    if ($_POST['message'] != "" && $_POST["admin"] == ""){
        $_POST["admin"] = "false";
    }
echo "<br>";
echo "admin";
echo $_POST["admin"];
echo "msg";
echo $_POST["message"];

    if ($_POST["admin"] == "true"){
        setcookie("Granola");
    }
    echo "test";

    if ($_POST["admin"] == "false"){
        setcookie("SuperWeakCookie");
        $params=['message'=>$_POST["message"], 'admin'=>"true"];
        $defaults = array(
            CURLOPT_URL => 'http://localhost/PHP/connectyou/doublon-page-5.php',
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $params,
        );
        $ch = curl_init();
        curl_setopt_array($ch, $defaults);
    }
    echo "test2";
?>
<h3>Tu avances bien... Mais au juste, qui es-tu ? Tu peux te présenter ?</h3>

<form action="doublon-page-5.php" method="post">
    <textarea name="message" rows="5" cols="80"></textarea>
    <input type="submit" name="bouton">
</form>


<?php
    if ($_POST['admin']=="true"){
// close session
        echo "<script type=\"text/javascript\">setTimeout(\"window.close();\", 3000);</script>";
    }
    ?>

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

