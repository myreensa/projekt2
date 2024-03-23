<?php

if(!empty($_REQUEST['username']) && !empty($_REQUEST['pass']) && !empty($_REQUEST['state']) ) {

    $username = test_input($_REQUEST['username']);
    $pass = test_input($_REQUEST['pass']);
 $hash = password_hash($pass, PASSWORD_DEFAULT);
    print("<p>Användare " . $username . " loggar in...<br>");

    //SQL Kommando för att hämta en användarens pass hash
    $sql = "SELECT * FROM profiles WHERE username = ?";
    // Kör SQL kommandot på servern med PDO
    $stmt = $conn->prepare($sql);
    if ( $stmt->execute([$username])) { // Returns true on success, false on failure
// Hämta data från databasen (här förväntar vi bara oss en rad fetch fungerar fint)
$row = $stmt->fetch(PDO::FETCH_ASSOC);
// Verifiera hashen från databasen med det inmatade lösenordet
if(password_verify($pass, $row['passhash']) ) {
    print("Lösenord verifierat, du loggas in...");
    $_SESSION['username'] = $username;
    $_SESSION['profile_id'] = $row['id']; // lagra användarens id, behövs för kommentarer
    header("Refresh: 5; url=index.php");
} else
    {
      print("Felaktigt lösenord!");  
    }
} else {
    print("Något gick fel då SQL kommandot kördes");
}
}
?>
