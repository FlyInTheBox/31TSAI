<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="fora.css">
</head>
<body>
<ol>
    <?PHP
    /*for ($i = 1; $i <= 100; $i++) {
        echo "<li>To jest $i element listy.</li>";
    }
    */
    ?>
</ol>
    <table>
        <tr>
            <?PHP
            $a = str_split("Witaj swiecie!", 1);

            foreach ($a as $b) {
                echo "<td class='td1'>$b</td>";
            }
            ?>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <?PHP
            $a = str_split("Kon'nichiwa sekai", 1);

            foreach ($a as $b) {
                echo "<td class='td1'>$b</td>";
            }
            ?>
        </tr>
    </table>
<br>
<table>
    <?php
    $n = 0;
    while ($n<5) {
        $n++;
        echo "<tr><td class='ld'>To jest wiersz numer $n</td></tr>";
    }
    ?>
</table>
<br>
<table>
    <tr>
    <?PHP
    $d = 0;
    do {
        $d++;
        echo "<td class='rd'>To jest kolumna numer $d</td>";
    }
    while ($d<5) ;
    ?>
    </tr>
</table>

</body>
</html>