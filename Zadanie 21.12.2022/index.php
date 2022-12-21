<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalendarz</title>
</head>
<body>
<table>
    <tr>
        <?PHP
        $x = date("t");
        for ($i = 1; $i < $x; $i++) {
            echo "<td>" . $i . "</td>";
            $z=$i%7;
            if ($z=0){
                echo "</tr><tr>";
            }
        }
        ?>
    </tr>
</table>
</body>
</html>