<h2>Login-vyn</h2>
<p>Här kan du logga in</p>

<form action="login.php" method="get">
Användarnamn <input type="text" name="username"><br>
Lösenord <input type="password" name="pass"><br>
<input type="submit" value="Logga in">
</form>

Inget konto? <a href="login.php?state=register">Registrera dig här</a>

<?php include "model_login.php" ?>