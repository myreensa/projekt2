<?php

 include "model_profiles.php" ?>

<script src="script.js"></script>

<?php

function sortByLikes($a, $b) {
    return $b['likes'] - $a['likes']; // Sortering enligt likes
}

usort($profiles, 'sortByLikes');

foreach ($profiles as $profile) {
    echo "Namn: " . $profile["username"] . " - Likes: " . $profile["likes"] . "<br>"; 
}

?>