<h1>Tabela pracownicy</h1>



<?php
$query = 'SELECT * FROM pracownicy JOIN stanowiska ON pracownicy.Id_stanowisko = stanowiska.Id_stanowisko order by Id_pracownika';
$result = mysqli_query($conn, $query);
echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Id_pracownika</th><th>Nazwisko</th><th>Imie</th><th>Stanowisko</th><th>Miasto</th><th>Data_Zatrudnienia</th><th>Wynagrodzenie</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Id_pracownika'] . '</td><td>'
            . $row['Nazwisko'] . '</td><td>' . $row['Imie'] . '</td><td>' . $row['Nazwa'] . '</td><td>' . $row['Miasto'] . '</td><td>' . $row['Data_zatrudnienia'] . '</td><td>' . $row['Wynagrodzenie'] . '</td></tr>';
    }
    echo '</table>';
} else {
    echo 'brak danych';
}
?>