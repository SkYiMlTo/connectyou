<html>
<script>
function Connexion() {
    if (document.login.pass.value === "dur4nd_g4m1ng") {
        alert("bien joué");
    }
}
</script>
<h3>Connectez-vous</h3>
<form name="login">
<input type="text" name="pass">
<input type="submit" onclick="Connexion()">
</form>

</html>

<?php
