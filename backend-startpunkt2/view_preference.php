<?php

 include "model_profiles.php" ?>

<script src="script.js"></script>

<?php

// Sortering enligt preferens
function sortByPreference($a, $b) {
    return $b['preference'] - $a['preference'];
}

usort($profiles, 'sortByPreference');

foreach ($profiles as $profile) {
    echo "Namn: " . $profile["username"] . " - Preferens: " . $profile["preference"] . "<br>"; 
}



?>

