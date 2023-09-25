    <div class="content-wrapper">
        <h1>Tabela stanowiska</h1>
        <div class="table-wrapper">
            <?php
                $query = "SELECT * FROM stanowiska";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    echo '<p>Zawiera '. mysqli_num_rows($result) .' wierszy</p>'
                        ?>
                <table>
                    <tr><th>Id stanowiska</th><th>Nazwa</th></tr>
                    <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr><td>' . $row['Id_stanowisko'] .'</td><td>' . $row['Nazwa'] .'</td></tr>';
                        }
                    ?>
                </table>
            <?php
                }
            ?>
        </div>
    </div>
