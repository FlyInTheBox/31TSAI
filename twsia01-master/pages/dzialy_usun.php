<div class="content-wrapper">
    <h1>Usuń dane w tabeli działy</h1>
    <div class="table-wrapper">
        <?php
        $Id_dzial = $_GET['id'];
        $Nazwa = $_GET['Nazwa'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") // Zapisz dane z formularza do bazy [INSERT]
        {

            $query = "DELETE FROM dzialy WHERE `dzialy`.`Id_dzial` = '$Id_dzial'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "Poprawnie usunięto rekord";
                echo '<br><a href="?page=dzialy">Powrót</a>';
            } else {
                echo "Błąd usuwania";
            }
        } else {
            echo '<form action="?page=dzialy_usun&id='.$Id_dzial.'Nazwa="'. $Nazwa .' method="post">
       <table>
       <tr><td>Id_stanowisko</td><td><input type="text" name="id" id="id" value="'. $Id_dzial .'" disabled></td></tr>
       <tr><td>Nazwa</td><td><input type="text" name="nazwa" id="nazwa" value="'. $Nazwa .'" disabled></td></tr>
        <tr><td colspan="2" style="text-align: center"><button type="submit">Usuń</button></td></tr>
       </table>
    </form>';}
        ?>
    </div>
</div>