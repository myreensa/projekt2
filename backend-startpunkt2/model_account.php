<?php
$username = $_SESSION['username'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_SESSION['role'] == "admin") {
        $username = $_POST['username'];
    }

    $realname = $_POST['realname'];
    $bio = $_POST['bio'];

    $sql = "UPDATE profiles SET realname = ?, bio = ? WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$realname, $bio, $username]);
}

$sql = "SELECT * FROM profiles WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$username]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// adminfunktionalitet
if ($result['role'] == 3) {
    $_SESSION['role'] = "admin";
}
?>

<!-- modifiera bion i profilen Check if form is submitted -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted bio from the form
    $newBio = $_POST['bio'];
    
    // Assuming you have some way to identify the user, for example, via session or user authentication
    $userId = 1; // Replace with the actual user ID
    
    // Update the user's bio in the database
    $statement = $pdo->prepare("UPDATE `profiles` SET `bio` = ? WHERE `profiles`.`id` = ?");
    $statement->execute([$newBio, $userId]);
    
    // Redirect user back to the profile page or wherever you want
    header("Location: profile.php");
    exit();
}
?>