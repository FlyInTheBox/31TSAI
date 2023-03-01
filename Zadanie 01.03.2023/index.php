<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <fieldset>
        <legend>Liczby</legend>
        <?PHP
        $arr = range(0, 100, 10);

        foreach ($arr as $value) {
            $checked = (!empty($_POST['check']) && in_array($value, $_POST['check'])) ? 'checked':'';
            echo '<label for="check"><input type="checkbox" name="check[]" value="' . $value . '" id="box' . $value . '" '.$checked.'>' . $value . '</label>';
        }
        echo '<br><button type="submit">Wyślij</button>';
        ?>
        <br><br>
        <?PHP
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (empty($_POST['check'])) {
                echo 'Nie wybrano żadnych liczb.';
            }
            else {
                echo 'Wybrano liczby: '.implode(', ',$_POST['check']).'.';
            }
        }
        ?>
    </fieldset>
</form>
</body>
</html>
