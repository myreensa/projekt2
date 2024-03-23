<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SortDate</title>
</head>
<body>

<header>
    <img src="./media/slogo.png" alt="Website logo" width=65" />
    <div id="logo">SortDate</div>

    <nav>
        <!-- Main menu -->
        <ul>
            <li><a href="./index.php">Profiler</a></li>
            <li><a href="./salary.php">Enligt lön</a></li>
            <li><a href="./likes.php">Enligt likes</a></li>
            <li><a href="./preference.php">Enligt preferens</a></li>
           <li><a href="./profile.php">Uppdatera profil</a></li> 
           <li><a href="./webbrapport.php">Rapport</a></li> 
            
            <?php
            if (!empty($_SESSION['username'])) {
                echo "<li><a href='./profile.php'>". htmlspecialchars($_SESSION['username'])."'s profile</a></li>";
            } else {
                echo "<li><a href='./login.php'>Login</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>


</body>
</html>
