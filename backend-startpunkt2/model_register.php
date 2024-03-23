<?php

//Registrera bara om man fyllt i formuläret

if (!empty($_REQUEST['username']) && !empty($_REQUEST['realname']) && !empty($_REQUEST['pass'])) {
    // comment: if not empty

    $username = test_input($_REQUEST['username']);
    $realname = test_input($_REQUEST['realname']);
    $pass = test_input($_REQUEST['pass']);
    $hash = password_hash($password, PASSWORD_DEFAULT); // hash uppg 2
    print("Användare " . $username . "signing up...");
    print("Hashen för ditt lösenord är : " . $hash . "</p>");



    // SQL kommando för att lägga till användare
    $sql = "INSERT INTO profiles (id, username, realname, passhash, zipcode, bio, salary, preference, email, likes) 
VALUES (NULL, ?, ?, ?, '00420', 'Bio', '20', '3', 'skurk@arcada.fi', '5'); "; // om fråga tecken prepare annors query, med prepare variabel/variabler efter execute
// försökte sätta mera ? men då sluta registreringen och fungera

    // Kör SQL kommandot på servern med pdo

    $stmt = $conn->prepare($sql); // Returns PDOStatement object on success
   if ( $stmt->execute([$username,$realname,$hash]) ) {
print("Du har lags till till databasen");
   } else {
    print("Något gick fel då sql kommandot kördes");
   }
} else {
    print("Fyll i hela formuläret");
}

    ?>
