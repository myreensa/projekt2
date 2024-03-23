<?php

 include "model_profiles.php" ?>

<script src="script.js"></script>

<?php

// Sortering enligt lön
function sortBySalary($a, $b) {
    return $b['salary'] - $a['salary'];
}

usort($profiles, 'sortBySalary');

foreach ($profiles as $profile) {
    echo "Namn: " . $profile["username"] . " - Lön: " . $profile["salary"] . "<br>"; 
}

?>