<h2> Här ser du dina kommentarer

</h2>


<?php include "model_comments.php" ?>

<?php
foreach ($results as $result) {
    echo "<p> Användaren {$result['user']} har kommenterat: <br>";
    echo "{$result['comment']}</p>";
}
?>