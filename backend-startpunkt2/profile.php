<?php include "handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dennis Dejtar</title>
    <link rel="stylesheet" href="./style.css">
  
</head>

<body>

    <div id="container">
        <?php include "header.php" ?>
        <section>

            <article>
                <h2>Här är din profil</h2>
                <?php include "./view_account.php" ?>

                <!-- Kommentarer som kommit in på annonsen -->

                <?php include "./view_comments.php" ?>
            </article>

            <!-- Kan ta bort profil -->
            <?php
            print "<form method='post' action=''>";
    print "<input type='hidden' name='delete_profile' value='{$result['password']}'>";
    print "<label for='password'Password:</label>";
    print "<input type='password' name'password' required";
    print "<button id='user' value='{$result['password']}'>Ta bort profil permanent</button>";
    print "<button type='submit'><br>Sätt ditt lösenord<br></button>"; 
    print "</form>";

    print "</div>";
    ?>


        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Made by Dennis<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>