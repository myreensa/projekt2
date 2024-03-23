<?php include "handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SortDate</title>
    <link rel="stylesheet" href="./style.css">
    <script src="./script.js" defer></script>
</head>

<body>

    <div id="container">
        <?php include "header.php" ?>
        <section>

            <article>
                <h2> Basic databas struktur image </p>
            <img src="databas.jpg" width="800" height="300"> <!-- Image tagg fungerar inte med html eller php.. testade också med att sätta alt o.s.v hopplöst.. -->
                <h2>Välkommen till webbrapporten! Samt uppgift 1!</h2>
                

               <h2> Databas dokumenteringsprocess: </h2> <b> SELECT: </b>  <p> Select verkar vara ganska basic, d.v.s SELECT * from din databas tabell och sen Where ? eller t.ex. username = någonting. </p>

<p> <b> Insert INTO: </b> Kanske lite svårare begrepp, när databas är nytt. Förstår ändå att den finns med alla kommandon, som realname o.s.v (används i tempfilen). </p>

<p> <b> Update: </b> Uppdaterar det du satt i insert. Ändrar rader i tabellen. </p>

<p> <b>Delete: </b>  Motsats till update. Tar bort de du satt i insert. Tar bort rader i tabellen. </p>

<p> <b>Where</b> används i SELECT om du vill välja någonting med en specifik t.ex. username </p>

<p> <b>Like:</b> Har inte använt tillräckligt. Men det är för att söka olika mönster, t.ex. alla användare som börjar på A. </p>

<p> <b>Order By:</b> Kan t.ex. tillämpas på like. T.ex. kan du ordna tabellen i alfabetisk ordning. Kan ordna i DESC (fallande ordning) eller ASC (stigande ordning) </p>

<p>Uppgift 1: Databas: Verkar som en lätt uppgift, men tog nog en god stund att förstå databas begreppen, och blev bättre medan jag gjorde. Först till slut skulle jag egentligen kunna förklara dom. Begreppen borde inte vara direkt i uppgift 1.
<p>Uppgift 2/3: Har registrering fungerande med hashing. Har en fungerande login, men ibland kommer användarnamnet inte upp i menyn och ibland kommer den, därför satt jag profile.php i menyn.
<p>Uppgift 4: Har ett system hur man kan ta bort en profil som kräver lösenords inmatning blev ganska klurigt och få allt det här med databasen. 
<p>Uppgift 5 och 6 Filtrering och sortering: Det här satt jag överlägset mest tid på och strula över för det tog väldigt lång tid att ens börja detta: Slutsatsen var att göra dessa i menyn: På tanke att detta var en Backend kurs var jag nöjd med att logiken och min ide fungerande. Kan sortera enligt lön, likes och preferens i descending order. Tänkte ascending order skulle vara lite onödigt.
<p>Uppgift 5 och 6 Pagination: Har system att uppdatera sin egen profil. Har en halft fungerande pagination, koden verkar korrekt, men fungerar inte helt fullt till nån orsak. Igen svårt att kunna uppdatera profilen när login int fungerar.
<p>Uppgift 7 Gilla eller ogilla: Min like och dislike function fungerar till 100% (lite delay, och måste refresha sidan). Tog länge att få fixat, speciellt dislike.
<p>Uppgift 8 Comments: Har ungefär lektionskoden, och den var fungerande och slutade fungera. Börja fungera igen när jag böt html koden före include model_ad. Fungerade inte om den var efter include model_ad.php. 

<p>Uppgift 9 CMS: Fanns inte i försenade så lämnade till sist ogjort och fokusera på grunderna. 

<p>Uppgift 10: Inspelningarna var bra för att Backend kräver mycket övning, vart ingår repetition. Tycker kursen var rolig på grund av dens utmaning. Det som tog mest tid var att börja på någonting för man hade inte så mycket kunskap av Backend tidigare. Jag siktade att få vissa punkter gjorda fullständigt i projekt 2 så jag skulle hoppeligen ändå nå till en 3 i kursen tilsammans på basen av förhöret och första projektet.


               
</article>

        </section>

       

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Made by Dennis<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>







