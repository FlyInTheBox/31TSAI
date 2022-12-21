<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalendarz</title>
    <style>
        td {
            border: 2px solid black;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            text-align: center;
        }
        .cyan:nth-child(even){
            background-color: cyan;
        }
    </style>
</head>
<body>
<h1>
    <?PHP
    echo (strftime("%B"));
    ?>
</h1>
<table>
    <tr>
        <?PHP
        $x = date("t");
        echo "<caption>".$x."</caption>";
        for ($i = 1; $i <= $x; $i++) {
            $z = $i % 7;
            if ($z != 0) {
                echo "<td>" . $i . "</td>";
            } else {
                echo "<td>" . $i . "</td>";
                echo "</tr><tr>";
            }
        }
        ?>
    </tr>
</table>
<br>
<hr>
<br>
<table>
    <tr>
        <?PHP
        $array = array("pon","wto","śro","czw","pią","sob","nie");
        foreach ($array as $i) {
            echo "<td class='cyan'>".$i."</td>";
        }
        ?>
    </tr>
</table>
</body>
</html>