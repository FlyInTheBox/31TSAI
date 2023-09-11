<h1>Tabela czytelnicy</h1>



<?php
$query = 'SELECT * FROM czytelnicy';
$result = mysqli_query($conn, $query);
echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Numer czytelnika</th><th>Imię i nazwisko</th><th>Data_ur</th><th>Ulica</th><th>Kod</th><th>Miasto</th><th>Data_zapisania</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Nr_czytelnika'] . '</td><td>'
            . $row['Imie'] . ' ' . $row['Nazwisko'] . '</td><td>' . $row['Data_ur'] . '</td><td>' . $row['Ulica'] . '</td><td>' . $row['Kod'] . '</td><td>' . $row['Miasto'] . '</td><td>' . $row['Data_zapisania'] . '</td></tr>';
    }
    echo '</table>';
} else {
    echo 'brak danych';
}
?>