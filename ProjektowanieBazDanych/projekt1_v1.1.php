<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description"
          content="Wylazowski Klasa 5D2">
    <title>Strona Główna</title>
    <style>
        td {
            padding: 5px;
        }
    </style>
</head>
<body>
<h2 align="center">Baza danych Wylazowski, Klasa 5D2</h2>
<h3 align="center">Tu wstawiamy nasz kod</h3>

<table cellspacing="0" cellpadding="0" border="1" style="width: 90%;" align="center">
<tr bgcolor="#A000FF">
    <td>ID</td>
    <td>NAZWISKO</td>
    <td>IMIĘ</td>
    <td>USER ID</td>
    <td>UWAGI</td>
    <td>DATA REJESTRACJI</td>
</tr>

<?php
$conn = mysqli_connect('localhost','root','','baza_testowa');
$query = "SELECT emp.id,
                     emp.first_name,
                     emp.last_name,
                     emp.comments,
                     emp.userid,
                     emp.start_date
                FROM emp
               WHERE emp.last_name LIKE 'n%';";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result))
{
    echo '<tr><td>';
    printf("%d", $row['id']);
    echo '</td><td>';
    printf("%s", $row['last_name']);
    echo '</td><td>';
    printf("%s", $row['first_name']);
    echo '</td><td>';
    printf("%s", $row['userid']);
    echo '</td><td>';
    printf("%s", $row['comments']);
    echo '</td><td>';
    printf("%s", $row['start_date']);
    echo '</td></tr>';
}
?>
</table>

</body>
</html>