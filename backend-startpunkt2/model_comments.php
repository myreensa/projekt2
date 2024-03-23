<?php 
// $_username = $_COOKIE['username'];
$profile_id = $_SESSION['profile_id'];
$username = $_SESSION['username'];
//print("Välkommen användare: " . $username);

$sql = "SELECT * FROM comments WHERE profile_id = ?";

$stmt = $conn->prepare($sql);
$stmt->execute([$profile_id]);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);

?>

