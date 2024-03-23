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
                <h2>Logga in eller registrera dig</h2>
<?php 
if ( (!empty($_REQUEST['state'])) && ($_REQUEST['state'] == 'register') ) {
    include "./view_register.php";
} else {
    include "./view_login.php";
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