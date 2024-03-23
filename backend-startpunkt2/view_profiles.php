<?php
include "model_profiles.php";
?>


<link rel="stylesheet" href="./style.css">
<script src="script.js"></script>

<!-- Displaying profiles -->
<?php foreach ($results as $result) : ?>
    <div>
        <p><br>Annonsen för användaren <a href='index.php?profile=<?php echo $result['username']; ?>'><?php echo $result['username']; ?></a>:</p>
        <p>Bio: <?php echo $result['bio']; ?></p>
        <p>Årslön: <?php echo $result['salary']; ?></p>
        <p>Antal gillningar: <?php echo $result['likes']; ?><br><br></p>
        <button id="like" onclick="processLike('<?php echo $result['username']; ?>')">Gilla</button>
        <button id="Dislike" onclick="processDislike('<?php echo $result['username']; ?>')">Ogilla</button>
    </div>
<?php endforeach; ?>

<p> <b>Byt sida</b> </p>

<!-- Simpel pagination -->
<?php
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 5;

$start = ($page > 1) ? ($page - 1) * $perPage : 0;

$profiles = $conn->prepare("SELECT id, username, bio, salary, likes FROM profiles ORDER BY salary DESC LIMIT :start, :perPage");
$profiles->bindParam(':start', $start, PDO::PARAM_INT);
$profiles->bindParam(':perPage', $perPage, PDO::PARAM_INT);
$profiles->execute();
$profiles = $profiles->fetchAll(PDO::FETCH_ASSOC);

$totalProfiles = count($results);
$pages = ceil($totalProfiles / $perPage);
?>

<div class="pagination">
    <?php for ($x = 1; $x <= $pages; $x++) : ?>
        <a href="?page=<?php echo $x; ?>&per-page=<?php echo $perPage; ?>"<?php if ($page === $x) { echo ' class="selected"'; } ?>><?php echo $x; ?></a>
    <?php endfor; ?>
</div>
