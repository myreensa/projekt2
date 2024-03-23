<!-- Extra fil som inte används -->
<!-- SAMMA SOM HANDY METHODS







<!- Extra -->







<?php
// Startar sessionen
session_start();
// Allt möjligt viktigt som vi använder ofta, sessionshantering, form validation etc.

// En funktion som tar bort whitespace, backslashes (escape char) och gör om < till html safe motsvarigheter
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Databaskonfiguration
$servername = "localhost";

include "hemlis.php";
// hemlis.php ser ut såhär:
// <?php $password = "sup3rh3mlis";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    // Sortering enligt lön
    $sql = "SELECT * FROM profiles ORDER BY likes DESC"; 
    $stmt = $conn->query($sql);

    
    $profiles = $stmt->fetchAll(PDO::FETCH_ASSOC);



   
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>



<!-- last resort error handling
error_reporting(E_ALL);
ini_set('display_errors',1); -->



