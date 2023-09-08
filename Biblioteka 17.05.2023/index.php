<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
$servername = 'localhost';
$database = 'wylazowskiw';
$username = 'wylazowskiw';
$password = 'password1$';
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn)
{
die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
. mysqli_connect_error());
}

?>
<nav>
    <a class="linki" href="?PAGE=mainpage">Strona główna</a>
    <a class="linki" href="?PAGE=db_conn">Test Połączenia</a>
    <a class="linki" href="?PAGE=listatabel">Lista tabel</a>
    <a class="linki" href="?PAGE=czytelnicy">Tabela czytelnicy</a>
    <a class="linki" href="?PAGE=dzialy">Tabela działy</a>
    <a class="linki" href="?PAGE=ksiazki">Tabela książki</a>
    <a class="linki" href="?PAGE=pracownicy">Tabela pracownicy</a>
    <a class="linki" href="?PAGE=stanowiska">Tabela stanowiska</a>
    <a class="linki" href="?PAGE=wypozyczenia">Tabela wypożyczenia</a>
    <hr>
    <a class="linki" href="?PAGE=login">Logowanie</a>

</nav>
<div class="container">
    <div class="content">
        <?php
        if (isset($_GET['PAGE'])) {
            if (file_exists('pages/' . $_GET['PAGE'] . '.php'))
                include('pages/' . $_GET['PAGE'] . '.php');
            else if (file_exists('include/' . $_GET['PAGE'] . '.php'))
                include('include/' . $_GET['PAGE'] . '.php');
            else
                echo '<h2>Ta strona nie istnieje</h2>';
        }
        ?>
    </div>

</div>
</body>
</html>