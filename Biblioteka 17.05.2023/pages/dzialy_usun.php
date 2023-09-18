<h1>Usuń rekord z tabeli działy</h1>

<?php
$Id_dzial = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") // Zapisz dane z formularza do bazy [INSERT]
{

    $query = "DELETE FROM dzialy WHERE `dzialy`.`Id_dzial` = '$Id_dzial'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Poprawnie usunięto rekord";
        echo '<br><a href="?PAGE=dzialy">Powrót</a>';
    } else {
        echo "Błąd usuwania";
    }
} else {
    echo '<form action="?PAGE=dzialy_usun&id='.$Id_dzial.'" method="post">
       <p><b>Czy napewno chcesz usunąć ten rekord?</b></p>
       <table>
        <tr><td colspan="2" style="text-align: center"><button type="submit">Usuń</button></td></tr>
       </table>
    </form>';}
?>