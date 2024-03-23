<!-- Like model fil -->
<?php
include "handy_methods.php";

session_start();


if (isset($_GET['username'])) {
    $username = $_GET['username'];
    
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        
        // model like
        
        if ($action === 'like') {
            $stmt = $conn->prepare("UPDATE profiles SET likes = likes + 1 WHERE username = :username");
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();

            // model dislike

        } elseif ($action === 'Dislike') {

            $stmt = $conn->prepare("UPDATE profiles SET likes = likes - 1 WHERE username = :username");
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();
            
        }
    }
}
?>

       ?>


