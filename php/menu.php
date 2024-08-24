<?php
    include("../including/aperturaSessioni.php");
    if(isset($_SESSION["entrato"]))
        $entrato = $_SESSION["entrato"];
    else
        $entrato = false;
    if($entrato == false){
        ?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <title>Osteria da Marco</title>
        <meta name="author" content="Paolo Aimar">
        <meta name="keywords" lang="it" content="html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/progetto.css">
    </head>
    <body class="bodyErrato">
        <p class="segnalaErrore">Identità non verificata, l'utente non ha ancora eseguito l'accesso. Verifica l'identità per poter accedere a questa parte!</p>
        <a href="login.php">Torna alla pagina di Login</a>
    </body>
</html>
<?php
    return;
    }
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <title>menu ristorante</title>
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
            <a href="registrazione.php">Registra</a>
            <a href="login.php">Login</a>
            <a id="attiva" href="menu.php">Men&ugrave;</a>
            <a href="ratings.php">Recensioni</a>
            <a href="contacts.php">Contatti</a>
            <a href="../including/logout.php">Logout</a>
        </div>
    </nav>
        <main>
            <!--qui inserisco la barra di ricerca dei piatti o dei menù-->
            <div class="menu"></div>
        </main>
        <footer>
            <div>&copy; 2024 Osteria da Marco. Tutti i diritti riservati.</div>
            <div><a href="mailto:s297424@studenti.polito.it">Email: s297424@studenti.polito.it</a></div>
            <div>Pagina Corrente: <?php echo basename($_SERVER['PHP_SELF']);?></div>
    </footer>
    </body>
</html>