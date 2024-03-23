<?php include "handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SortDate</title>
    <link rel="stylesheet" href="./style.css">
  
</head>

<body>

    <div id="container">
        <?php include "header.php" ?>
        <section>

            <article>
                <p>Här är profilerna sorterade enligt likes</p>
                <?php include "./view_likes.php" ?>
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