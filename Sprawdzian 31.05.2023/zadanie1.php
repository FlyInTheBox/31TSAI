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
$conn = mysqli_connect('127.0.0.1', 'wilk', 'CTwwTdsQoP', 'wilk');
if (!$conn)
{
    die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
        . mysqli_connect_error());
}
$query= 'SELECT Sygnatura,Tytul,Imie,Nazwisko,Wydawnictwo,Objetosc_ks,Cena,Rok_wyd FROM ksiazki WHERE Objetosc_ks > 500';
$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<p>Książka ' .   $row['Tytul'].','
            .  'stron' .' '.  $row['Objetosc_ks'].','.' '
            . ' autor ' . '<b>' .  $row['Imie'] . ' ' . $row['Nazwisko'] .' '. '</b>'.' ,'.' '
            .'wydawnictwo'.' '.  $row['Wydawnictwo'].' '
              .$row['Rok_wyd'] .','
            .'sygnatura'.' '.   $row['Sygnatura'].','.
            'kosztuje'. ' '. $row['Cena'].'zł'.
            '</p>';

    }
}
        mysqli_close($conn);

?>
</body>
</html>