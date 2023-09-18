<h1>Tabela stanowiska</h1>

<?php
$query = 'SELECT * FROM stanowiska';
$result = mysqli_query($conn, $query);
echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Id_stanowisko</th><th>Nazwa</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Id_stanowisko'] . '</td><td>'
            . $row['Nazwa'] . '</td></tr>';
    }
    echo '</table>';
} else {
    echo 'brak danych';
}
?>