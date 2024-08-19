<?php
    /*include("../including/aperturaSessioni.php");
    if(isset($_SESSION["entrato"]))
        $entrato = $_SESSION["entrato"];
    else
        $entrato = false;
    */
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <title>ratings ristorante</title>
        <meta name="author" content="Paolo Aimar">
        <meta name="keywords" lang="it" content="html">
        <meta name="description" content="pagina home">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/progetto.css">
    </head>
    <body>
    <nav>
        <div class="navbar">
            <a href="home.php">Home</a>
            <a href="menu.php">Men&ugrave;</a>
            <a class="attiva" href="ratings.php">Recensioni</a>
            <a href="contacts.php">Contatti</a>
        </div>
    </nav>
        <main>

        </main>
        <footer>
            <div>&copy; 2024 Osteria da Marco. Tutti i diritti riservati.</div>
            <div><a href="mailto:s297424@studenti.polito.it">Email: s297424@studenti.polito.it</a></div>
            <div>Pagina Corrente: <?php echo basename($_SERVER['PHP_SELF']);?></div>
    </footer>
    </body>
</html>