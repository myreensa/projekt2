<!-- Uppdatera sin egen profil -->

<?php
include "handy_methods.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = test_input($_POST['fullname']);
    $bio = test_input($_POST['bio']);
    
    $sql = "UPDATE profiles SET realname = ?, bio = ? WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$fullname, $bio, $_SESSION['username']]);
    
    header("Location: profile.php");
    exit();
}
?>
