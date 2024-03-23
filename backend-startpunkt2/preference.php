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
                <p>Här är profilerna sorterade enligt preferens</p>
               
            
                <?php include "./view_preference.php" ?>
                 <br>
                <p>1. Man. 2. Kvinna 3. Båda 4. Annat 5. Alla </p>
                
                <p><a href="./index.php">Tillbaka till profilerna!</a></p>
                
            </article>

        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Made by Dennis<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>