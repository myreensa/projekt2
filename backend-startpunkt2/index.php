<?php include "handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SortDate</title>
    <link rel="stylesheet" href="./style.css">
    <script defer type="text/javascript" src="./script.js"></script>
    
</head>

<body>

    <div id="container">
        <?php include "header.php" ?>
        <section>

            <article>
                <h2>Välkommen till SortDate!</h2>
                <p>Hitta ditt perfekta val!</p>

                <?php 
                // Se på enstaka profiler
                if (!empty($_REQUEST['profile'])) {
                    include "./view_ad.php";
                    
                } else {
                    // Visa alla profiler
                    include "./view_profiles.php";
                }
                ?>
                

                
            </article>

        </section>



      


        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Made by Dennis<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>


