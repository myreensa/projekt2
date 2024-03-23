<?php 
// Hämtar användarnmanet för profilen vi försöker se på
$username = test_input($_REQUEST['profile']);

$sql = "SELECT * FROM profiles WHERE username = ?";

$stmt = $conn->prepare($sql);
$stmt->execute([$username]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);


// print_r($result);

include "handy_methods.php";


if ( !empty(test_input($_REQUEST['kommentar'])) ) { print("Skickar kommentaren till databasen... "); }

?>