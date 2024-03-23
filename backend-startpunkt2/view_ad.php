<h2>En kontakt annons</h2>
<p>Här kan du lämna en kommentar om du gillar annonsen</p>


<form action="index.php" method="get">
    <input type="text" name="kommentar">
   <input type="hidden" name="profile" value="<?= $result['username']?>"> 
    <input type="submit" value="Lämna kommentar">
</form>

<?php include "model_ad.php" ?>

<!-- Böt html koden före för att annors fungerade inte chatt elementet. -->

<!-- <p>Kontaktannonsen för <?= $result['username'] ?>:<br>
<?= $result['bio'] ?></p> -->





