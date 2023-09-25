    <div class="content-wrapper">
        <h1>Tabela działy</h1>
        <div class="table-wrapper">
            <?php
            $query = 'SELECT * FROM dzialy';
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                echo '<p>Zawiera '. mysqli_num_rows($result) .' wierszy</p>';
                echo '<table>';
                echo '<tr><th>Id_dzial</th><th>Nazwa</th><th colspan="2"><a class="add" href="?page=dzialy_dodaj"><span class="material-symbols-outlined">add</span></a></th><tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr><td>' . $row['Id_dzial'] . '</td><td>' . $row['Nazwa'] .'</td><td colspan="2"> <a href="?page=dzialy_edycja&id='. $row['Id_dzial'] .' &Nazwa='. $row['Nazwa'] .'"><span class="material-symbols-outlined">edit</span></a><a href="?page=dzialy_usun&id='. $row['Id_dzial'] .' &Nazwa='. $row['Nazwa'] .'"><span class="material-symbols-outlined">close</span></a></td><tr>';
                }
                echo '</table>';
            } else {
                echo 'brak danych';
            }
            ?>
        </div>
    </div>
