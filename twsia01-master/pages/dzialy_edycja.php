<div class="content-wrapper">
    <div class="table-wrapper">
<?php

$Id_dzial = $_GET['id'];
$Nazwa = $_GET['Nazwa'];


if ($_SERVER["REQUEST_METHOD"] == "POST") // Zapisz dane z formularza do bazy [INSERT]
{

    $Nazwa = $_POST['Nazwa'];
    $query = "UPDATE `dzialy` SET `Nazwa` = '" . $Nazwa . "' WHERE `dzialy`.`Id_dzial` = '$Id_dzial'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Poprawnie zedytowano rekord";
        echo '<br><a href="?page=dzialy">Powrót</a>';
    } else {
        echo "Błąd edycji";
    }

} else {
    echo '<form action="?page=dzialy_edycja&id=' . $Id_dzial . '&Nazwa=' . $Nazwa . '" method="post">
            <table>
                <tr><td><label for="Id_dzial">Id_dzial</label></td><td><input type="text" name="Id_dzial" value="' . $Id_dzial . '" disabled </td></tr>
                <tr><td><label for="Nazwa">Nazwa</label></td><td><input type="text" name="Nazwa" id="Nazwa" value="' . $Nazwa . '"></td></tr>
                <tr><td colspan="2" style="text-align: center"><button type="submit">Zmień</button></td></tr>
            </table>
        </form>';
}
?>
    </div>
</div>