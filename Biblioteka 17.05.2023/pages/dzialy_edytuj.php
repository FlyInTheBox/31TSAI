<h1>Edytuj dane tabeli działy</h1>

<?php
$Id_dzial = $_GET['id'];
$Nazwa = $_GET['Nazwa'];
if ($_SERVER["REQUEST_METHOD"] == "POST") // Zapisz dane z formularza do bazy [INSERT]
{

    $Nazwa = $_POST['Nazwa'];
    $query = "UPDATE `dzialy` SET `Nazwa` = '".$Nazwa."' WHERE `dzialy`.`Id_dzial` = '$Id_dzial'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Poprawnie zedytowano rekord";
        echo '<br><a href="?PAGE=dzialy">Powrót</a>';
    } else {
        echo "Błąd edycji";
    }
} else {
    echo '<form action="?PAGE=dzialy_edytuj&id='.$Id_dzial.'&Nazwa='.$Nazwa.'" method="post">
       <table>
       <tr><td>Id_dzial</td><td><input type="text" name="Id_dzial" id="Id_dzial" value="'.$Id_dzial.'" disabled></td></tr>
        <tr><td>Nazwa</td><td><input type="text" name="Nazwa" id="Nazwa" value="'.$Nazwa.'"></td></tr>
        <tr><td colspan="2" style="text-align: center"><button type="submit">Zapisz</button></td></tr>
       </table>
    </form>';}
?>