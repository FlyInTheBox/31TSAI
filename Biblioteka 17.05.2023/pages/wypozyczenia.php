<h1>Tabela wypożyczenia</h1>

<?php
$query = 'SELECT Nr_transakcji, ksiazki.Tytul, pracownicy.Imie, pracownicy.Nazwisko, czytelnicy.Imie, czytelnicy.Nazwisko, wypozyczenia.Nr_czytelnika, Data_Wypozyczenia, Data_zwrotu  FROM wypozyczenia JOIN ksiazki ON wypozyczenia.Sygnatura = ksiazki.Sygnatura join pracownicy on pracownicy.Id_pracownika=wypozyczenia.Id_pracownika join czytelnicy on czytelnicy.Nr_czytelnika= wypozyczenia.Nr_czytelnika';
$result = mysqli_query($conn, $query);
echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Nr_transakcji</th><th>Nazwa</th><th>Pracownik</th><th>Czytelnik</th><th>Data_Wypozyczenia</th><th>Data_zwrotu</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Nr_transakcji'] . '</td><td>'
            . $row['Tytul'] . '</td><td>' . $row['Imie'] . " " . $row['Nazwisko'] . '</td><td>' . $row['Nr_czytelnika'] . '</td><td>' . $row['Data_Wypozyczenia'] . '</td><td>' . $row['Data_zwrotu'] . '</td></tr>';
    }
    echo '</table>';
} else {
    echo 'brak danych';
}
?>