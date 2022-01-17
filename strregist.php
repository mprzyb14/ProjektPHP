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
            <h1>REJESTRACJA</h1>
            <a href="index.php">STRONA GŁÓWNA</a>
        </div>
    </header>

    <section>
        <form action="regist.php" method="post">
            <input type="text" name="login" />
            <br>
            <input type="password" name="password" />
            <br>
            <button type="submit">Rejestracja</button>
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