<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabliczka mnożenia</title>
    <style>
        table {
            border: 1px solid black;
            font-family: Verdana;
            font-size: large;
            border-collapse: collapse;
        }

        th {
            background-color: burlywood;
            border: 1px dotted black;
            padding: 5px;
        }

        td {
            border: 1px dotted black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
<table>
    <th>X</th>
    <?PHP
    for ($col = 1; $col <= 100; $col++) {
        echo '<th>' . $col . '</th>';
    }
    for ($col = 1; $col <= 100; $col++) {
        echo '<tr><th>' . $col . '</th>';
        for ($row = 1; $row <= 100; $row++) {
            if ($col != $row) {
                echo '<td  style="background-color: beige">' . ($col * $row) . '</td>';
            } else {
                echo '<td style="background-color: bisque;">' . ($col * $row) . '</td>';
            }
        }
        echo '</tr>';
    }
    echo '</tr>';
    ?>
</table>
</body>
</html>