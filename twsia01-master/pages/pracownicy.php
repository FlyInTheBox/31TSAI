    <div class="content-wrapper">
        <h1>Tabela pracownicy</h1>
        <div class="table-wrapper">
            <?php
            $query = 'SELECT * FROM pracownicy 
                        INNER JOIN stanowiska ON stanowiska.Id_stanowisko = pracownicy.Id_stanowisko 
                        WHERE 1 
                        ORDER BY pracownicy.Wynagrodzenie ASC;';
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                echo '<p>Zawiera '. mysqli_num_rows($result) .' wierszy</p>';
                echo '<table>';
                echo '<tr><th>Id_pracownika</th><th>Nazwisko</th><th>Imie</th><th>Stanowisko</th><th>Miasto</th><th>Data_zatrudnienia</th><th>Wynagrodzenie</th><tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr><td>' . $row['Id_pracownika'] . '</td><td>'
                        . $row['Nazwisko'] .'</td><td>'. $row['Imie'] .'</td><td>'. $row['Nazwa'] . '</td><td>'. $row['Miasto'] .'</td><td>'. $row['Data_zatrudnienia'] .'</td><td>'. $row['Wynagrodzenie'] .'</td><tr>';
                }
                echo '</table>';
            } else {
                echo 'brak danych';
            }
            ?>
        </div>
    </div>
