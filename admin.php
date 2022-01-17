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
            <h1>ADMIN</h1>
            <a href="logout.php">Wyloguj się</a>
        </div>
    </header>

    <section>
        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'test');
        if ($connect) {
        } else {
            die('Błąd połączenia z bazą danych');
        }

        $sql = 'SELECT * FROM booking;';
        $result = mysqli_query($connect, $sql);
        $rowCount = mysqli_num_rows($result);
        echo "<br><br><center><h1>REZERWACJE</h1></center>";
        echo "<br><center><table border='1' cellspacing = '1' cellpadding = '10'>
	<tr>
	<th>Dzień</th>
	<th>Miesiąc</th>
	<th>Rok</th>	
	<th>Nazwisko</th>	
	</tr>";

        if ($rowCount > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['day'] . "</td>";
                echo "<td>" . $row['month'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['surname'] . "</td>";
                echo "</tr>";
            }
        } else echo 'No results found.';

        echo "</table><center>";


        mysqli_close($connect);
        ?>
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