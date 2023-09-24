<div class="content-wrapper">
    <div class="table-wrapper">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") // Zapisz dane z formularza do bazy [INSERT]
        {

            $query = "INSERT INTO `dzialy` (Nazwa) VALUES ('" . $_POST['Nazwa'] . "')";
            echo $query;

            if (mysqli_query($conn, $query)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }

        } else {
        ?>
        <form action="?page=dzialy_dodaj"  method="POST">
            <table>
                <tr>
                    <td><label for="id_dzial">Id_dzial</label></td>
                    <td><input type="text" name="id_dzial" id="id_dzial" disabled></td>
                </tr>
                <tr>
                    <td><label for="Nazwa">Nazwa</label></td>
                    <td><input type="text" name="Nazwa" id="Nazwa"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center"><input type="Submit" value="Zapisz" style="padding: 3px 10px"></td>
                </tr>
            </table>

        </form>
        <?php
        }
        ?>
    </div>
</div>