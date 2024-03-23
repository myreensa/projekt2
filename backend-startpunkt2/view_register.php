<h2>Registreringsvyn</h2>
<p>Här kan du registrera dig</p>




<form action="login.php" method="get">
    <!-- `username`, `realname`, `passhash`, `zipcode`, `bio`, `salary`, `preference`, `email`, `likes -->

    <!-- Uppgift 3 registreringsformulär med alla krav -->
Användarnamn <input type="text" name="username"<br>
Epost <input type="text" name="email"<br>
Stad <input type="text" name="city"<br>
Hela namnet <input type="text" name="realname"<br>
Lösenord <input type="password" name="pass"<br>
Postnummer <input type="text" name="zipcode"<br>
Annonstext <input type="text" name="bio"<br>
Lön <input type="text" name="salary"<br>

<input type="hidden" name="preference" value="3">
<!-- <select name="preference"> <option value="man">Man</option> <option value="kvinna">Kvinna</option> <option value="bada">Båda</option> <option value="annat">Annat</option> <option value="alla">Alla</option> </select> --> 
<input type="hidden" name="likes" value="0">
<input type="hidden" name="state" value="register">
<input type="submit" value="Registera dig">

</form>

Har du redan ett konto? <a href="login.php?state=login">Logga in här</a>

<?php include "model_register.php" ?>

