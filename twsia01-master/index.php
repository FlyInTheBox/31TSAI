<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="/style/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>projekt z php</title>
</head>

<body>

<?php
    include './include/db_conn.php'
?>
    <div class="main">
        <div class="sidebar">
            <div class="list">
                <ul>
                    <li><a href="?page=main">Strona Główna</a></li>
                    <li><a href="?page=test">Test połączenia</a></li>
                    <li><a href="?page=czytelnicy">Tabela Czytelnicy</a></li>
                    <li><a href="?page=dzialy">Tabela Działy</a></li>
                    <li><a href="?page=ksiazki">Tabela Książki</a></li>
                    <li><a href="?page=pracownicy">Tabela Pracownicy</a></li>
                    <li><a href="?page=stanowiska">Tabela Stanowiska</a></li>
                    <li><a href="?page=wypozyczenia">Tabela Wypożyczenia</a></li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <?php
            if (isset($_GET['page'])) {
                if (file_exists('PAGES/' . $_GET['page'] . '.php'))
                    include('PAGES/' . $_GET['page'] . '.php');
                else
                    echo '<h2>TA STRONA NIE ISTNIEJE</h2>';
            } else {
                include 'pages/main.php';
            }
            include './include/db_disconn.php'
            ?>
        </div>
    </div>
</body>

</html>