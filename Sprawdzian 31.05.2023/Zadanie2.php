<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        table{
            border-collapse: collapse;
        }
        tr,th,td{
            border: 1px solid black;
        }
        td {
            padding: 2px;
        }
    </style>
</head>
<body>

<?php
$database = 'wylazowski';
$servername = 'localhost';
$username = 'Wylazowski';
$password = 'tajnehaslo';
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
        . mysqli_connect_error());
}


$query= 'SELECT Imie,Nazwisko,Data_zatrudnienia,Miasto,Wynagrodzenie FROM pracownicy JOIN stanowiska ON pracownicy.Id_stanowisko=stanowiska.Id_stanowisko WHERE Wynagrodzenie >2000 AND Nazwa="Księgowy" ORDER by Wynagrodzenie desc';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Pracownik</th><th style="text-align: center">Miasto</th><th style="text-align: right">Data zatrudnienia</th><th style="text-align: right">Wynagrodzenie</th>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Imie'] ." ". $row['Nazwisko']. '</td><td style="text-align: center">'
            . $row['Miasto'].'</td><td style="text-align: right">'
            . $row['Data_zatrudnienia'].'</td><td style="text-align: right">'
            . $row['Wynagrodzenie'].'</td>'
        ;
    }
    echo '</table>';
} else {
    echo 'brak danych';
}
mysqli_close($conn);

?>
</body>
</html>
