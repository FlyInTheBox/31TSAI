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
        tr{
            border: 1px solid black;


        }
        th{
            border: 1px solid black;

        }
        td{
            border: 1px solid black;

        }
    </style>
</head>
<body>

<?php
$conn = mysqli_connect('127.0.0.1', 'wilk', 'CTwwTdsQoP', 'wilk');
if (!$conn)
{
    die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
        . mysqli_connect_error());
}


$query= 'SELECT Imie,Nazwisko,Data_zatrudnienia,Miasto,Wynagrodzenie FROM pracownicy WHERE Wynagrodzenie >2800  ORDER by Wynagrodzenie desc';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Pracownik</th><th>Miasto</th><th>Data zatrudnienia</th><th>Wynagrodzenie</th><th>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Imie'] ." ". $row['Nazwisko']. '</td><td>'
            . $row['Miasto'].'</td><td style="text-align: right">'
            . $row['Data_zatrudnienia'].'</td><td style="text-align: right">'
            . $row['Wynagrodzenie'].'</td><td>'
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
