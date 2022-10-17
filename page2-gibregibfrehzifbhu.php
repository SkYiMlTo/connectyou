<!DOCTYPE html>
<html>
<body>

<h1>Hello back my dear Admin !</h1>

<p>Okay... That wasn't smart to hard code the password in the page... Well I reset your password. Try to connect</p>
<form action="page2-gibregibfrehzifbhu.php" method = "post">
    <label for="password">Password:</label> <input type="text" id="password" name="password"><br /><br />
    <button type = "submit">Login</button>
</form>

</body>
</html>

<?php

    if ($_POST["password"] == "admin") {
        header("Location: page3-iffuerifreoifjrekopcde8.php");
    }

?>