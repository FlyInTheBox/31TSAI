<h1>Tabela książki</h1>

<?php
$query = 'SELECT Sygnatura,	Tytul,	Nazwisko, Imie,	Wydawnictwo,	Miejsce_wyd,	Rok_wyd,	Objetosc_ks,	Cena,	Rok_wyd, dzialy.Nazwa FROM ksiazki join dzialy on dzialy.Id_dzial=ksiazki.Id_dzial order by Sygnatura';
$result = mysqli_query($conn, $query);
echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Sygnatura</th><th>Tytul</th><th>Nazwisko</th><th>Imie</th><th>Wydawnictwo</th><th>Miejsce_wyd</th><th>Rok_wyd</th><th>Objetosc_ks</th><th>Cena</th><th>Rok_wyd</th><th>Dział</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Sygnatura'] . '</td><td>'
            . $row['Tytul'] . '</td><td>' . $row['Nazwisko'] . '</td><td>' . $row['Imie'] . '</td><td>' . $row['Wydawnictwo'] . '</td><td>' . $row['Miejsce_wyd'] . '</td><td>' . $row['Rok_wyd'] . '</td><td>' . $row['Objetosc_ks'] . '</td><td>' . $row['Cena'] . '</td><td>' . $row['Rok_wyd'] . '</td><td>' . $row['Nazwa'] . '</td></tr>';
    }
    echo '</table>';
} else {
    echo 'brak danych';
}
?>