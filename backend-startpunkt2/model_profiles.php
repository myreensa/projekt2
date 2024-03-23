<?php


$sql = "SELECT * FROM profiles ORDER BY salary DESC"; // sortering enligt lön i Descending order för vill så klart ha den med högsta lönen
$stmt = $conn->query($sql);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Funktion att deleta profil på profile.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete_profile'])) {
        $profileToDelete = $_POST['delete_profile'];
        $enteredPassword = $_POST['password'];

        if (verifyPassword($enteredPassword, 'password')) {
            // Lösenordet är korrekt, fortsätt med att ta bort profilen
            $deleteSql = "DELETE FROM profiles WHERE username = ?";
            $deleteStmt = $conn->prepare($deleteSql);
            $deleteStmt->bindParam('?', $profileToDelete);
            $deleteStmt->execute();

            echo "Profile deleted successfully.";
        } else {
            // Fel lösenord, visa ett felmeddelande
            echo "Incorrect password. Profile not deleted.";
        }
    }
}

function verifyPassword($enteredPassword, $password) {
    return password_verify($enteredPassword, $password);
}

?>










