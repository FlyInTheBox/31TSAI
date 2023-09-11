<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description"
          content="Wylazowski Klasa 5D2">
    <title>Strona Główna</title>
</head>
<body>
    <h2 align="center">Baza danych Wylazowski, Klasa 5D2</h2>
    <h3 align="center">Tu wstawiamy nasz kod</h3>
    <?php
    $conn = mysqli_connect('localhost','root','','baza_testowa');
    $query = "SELECT emp.id,
                     emp.first_name,
                     emp.last_name
                FROM emp
               WHERE emp.last_name LIKE 'n%';";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result))
    {
        printf("%d", $row['id']);
        printf("%s", $row['last_name']);
        printf("%s", $row['first_name']);
    }
    ?>
</body>
</html>