<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, tr ,td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>

<hr>
<h1>Wyniki zapytania w akapitach:</h1>
<?php
$database = 'wylazowski';
$servername = 'localhost';
$username = 'Wylazowski';
$password = 'tajnehaslo';
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn)
{
    die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
        . mysqli_connect_error());
}

$query = 'SELECT Nr_czytelnika, Imie, Nazwisko FROM czytelnicy';

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<p>Numer: ' . $row['Nr_czytelnika']
            . '. Imię i nazwisko: ' . $row['Imie'] . ' ' . $row['Nazwisko'] . '</p>';
    }
} else {
    echo 'brak danych';
}
?>
<hr>
<h1>Wyniki zapytania w liście nieuporządkowanej:</h1>
<?php
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<ol style="list-style-type: circle;">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li>Numer: ' . $row['Nr_czytelnika']
            . '. Imię i nazwisko: ' . $row['Imie'] . ' ' . $row['Nazwisko'] . '</li>';
    }
    echo '</ol>';
} else {
    echo 'brak danych';
}
?>
<hr>
<h1>Wyniki zapytania w tabeli HTML:</h1>
<?php
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Numer czytelnika</th><th>Imię i nazwisko</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Nr_czytelnika'] . '</td><td>'
            . $row['Imie'] . ' ' . $row['Nazwisko'] . '</td></tr>';
    }
    echo '</table>';
} else {
    echo 'brak danych';
}

?>
<hr>
<h1>Zadanie.5</h1>
<?php
if (!$conn)
{
    die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
        . mysqli_connect_error());
}

$query = 'SELECT tytul, Nazwisko, Imie FROM ksiazki';

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<p>Ksiązka ' .'<em>' .$row['tytul'] . '</em>'
            . ' została napisana przez ' . ' <b> ' . $row['Imie'] . ' ' . $row['Nazwisko'] . '</b>'. '.' . '</p>';
    }
} else {
    echo 'brak danych';
}
?>
<hr>
<h1>Zadanie.6</h1>
<?php
$query = 'SELECT nazwa FROM stanowiska';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Nazwa stanowiska </th><th>liczba liter </th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['nazwa'] . '</td><td style="text-align: right;">'
            . mb_strlen($row['nazwa']) . '</td></tr>';
    }
    echo '</table>';
} else {
    echo 'brak danych';
}
mysqli_close($conn)
?>
<hr>
<h1>Zadanie 3</h1>
<?php
$conn = mysqli_connect($servername, $username, $password, $database);
$query = 'SELECT Sygnatura,Tytul,Imie,Nazwisko,Wydawnictwo,Rok_wyd,Cena FROM `ksiazki` WHERE (Wydawnictwo LIKE "PWN" or Wydawnictwo LIKE "HELION") AND Rok_wyd BETWEEN 1990 AND 2011 ORDER BY Rok_wyd;';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Sygnatura</th><th>Tytuł</th><th>Autor</th><th>Wydawnictwo</th><th>Rok wydania</th><th>Cena</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $arr = explode('.', $row['Cena']);
        echo '<tr><td>' . $row['Sygnatura'] . '</td><td>' . $row['Tytul'] . '</td><td>' . $row['Imie']. ' '. $row['Nazwisko'] . '</td><td>' . $row['Wydawnictwo'] . '</td><td>' . $row['Rok_wyd'] . '</td><td style="text-align: right">' . $arr[0] . ' zł '. $arr[1]. ' gr' . '</td></tr>';
    }
    echo '</table>';
} else {
    echo 'brak danych';
}
mysqli_close($conn)
?>
</body>
</html>