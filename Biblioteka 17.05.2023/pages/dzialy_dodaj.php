<h1>Nowe dane tabeli działy</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") // Zapisz dane z formularza do bazy [INSERT]
{
    $Nazwa = $_POST['Nazwa'];
    $query = "INSERT INTO dzialy (Nazwa) values ('".$Nazwa."')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Poprawnie dodano rekord do bazy";
        echo '<br><a href="?PAGE=dzialy">Powrót</a>';
    } else {
        echo "Błąd dodawania do bazy";
    }

} else {
    echo '<form action="?PAGE=dzialy_dodaj" method="post">
       <table>
       <tr><td>Id_dzial</td><td><input type="text" name="Id_dzial" id="Id_dzial" disabled></td></tr>
        <tr><td>Nazwa</td><td><input type="text" name="Nazwa" id="Nazwa"></td></tr>
        <tr><td colspan="2" style="text-align: center"><button type="submit">Zapisz</button></td></tr>
       </table>
    </form>';}
?>
