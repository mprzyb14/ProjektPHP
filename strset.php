<?php
session_start();
?>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barber</title>
</head>
<link rel="stylesheet" href="style.css" type="text/css" />

<body>
    <header>
        <img src="Logo.png" alt="Logo" width="200" height="100">
        <div class="log">
            <a href="logout.php">Wyloguj się</a>
            <br>
            <br>
            <a href="user.php">Wróć</a>
        </div>
    </header>

    <section>
        <form action="reservation.php" method="post">
            <p>Zmień hasło</p>
            <br>
            <input type="text" name="day" />
            <br>
            <br>
            <button type="submit">Zamień</button>
        </form>
    </section>

    <footer>
        <div class="adres">
            ADRES
            <br>
            ul. Meissnera 2C
            <br>
            60-408 Poznań
        </div>
        <div class="kontakt">
            KONTAKT
            <br>
            123456789
        </div>
    </footer>
</body>

</html>