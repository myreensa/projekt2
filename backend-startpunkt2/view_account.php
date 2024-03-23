<h2>Här är dina kontouppgifter</h2>
<p>Här kan du editera din kontaktannons</p>

<?php include "model_account.php"; ?>

<!-- <form action="profile.php" method="get">
    Full name: <input type="text" name="fullname" value="<?= $result['realname'] ?>"> <br>
    Bio: <input type="text" name="bio" value="<?= $result['bio'] ?>" ><br>
    <input type="submit" value="Uppdatera profil">
</form> -->


    <form action="profile.php" method="get">
    <label for="realname">Real name:</label><br>
    <textarea id="realname" name="realname" rows="1" cols="10"></textarea><br><br>
    <label for="fullname">Full name:</label><br>
    <textarea id="fullname" name="fullname" rows="1" cols="10"></textarea><br><br>
        <label for="bio">Bio:</label><br>
        <textarea id="bio" name="bio" rows="4" cols="20"></textarea><br><br>
        <input type="submit" value="Uppdatera profil">
    </form>


<div>
    <p>Logga ut:</p>
    <form action="profile.php?logout=true" method="get">
<input type="submit" value="Logga ut">
</form>
</div>

