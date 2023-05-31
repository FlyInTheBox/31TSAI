<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
$query= 'SELECT Tytul,Imie,Nazwisko,Objetosc_ks,Wydawnictwo,Rok_Wyd,Sygnatura,Cena FROM ksiazki JOIN dzialy ON ksiazki.Id_dzial=dzialy.Id_dzial WHERE dzialy.Nazwa="Literatura" AND Objetosc_ks<300 ORDER BY Objetosc_ks';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<ul><li>' .   $row['Tytul'].','
            . ' autor ' . '<b>' .  $row['Imie'] . ' ' . $row['Nazwisko'] . '</b>'.', '.' '
            .$row['Objetosc_ks']. ' stron, '.'wydawnictwo '
            .$row['Wydawnictwo'].' ('.$row['Rok_Wyd'].' r.)' .','
            .' sygnatura'.'  = '.   $row['Sygnatura'].','.
            ' cena:'. ' '. $row['Cena'].'zł'.
            '</li>';

    }
    echo '</ul>';
}

?>
</body>
</html>
