<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wiek</title>
</head>
<body>
<?PHP
$wiek = rand(1, 100);
?>
<h1 style="border: 2px solid black">Mam <?= $wiek ?> lat.</h1>
<h2 style="border: 2px dotted navy;">
    <?PHP
    if ($wiek < 18) {
        echo "Jeszcze nie możesz głosować";
    } elseif ($wiek < 21) {
        echo "Możesz tylko głosować";
    } elseif ($wiek < 30) {
        echo "Możesz głosować i kandydować do Sejmu";
    } elseif ($wiek < 35) {
        echo "Możesz głosować i kandydować do Sejmu i Senatu";
    } elseif ($wiek >= 35) {
        echo "Możesz głosować, kandydować do Sejmu i Senatu oraz na Prezydenta";
    }
    ?>
</h2>
<pre>
<?PHP
$plusy = rand(0, 10);
echo $plusy;
?>
</pre>
<pre>
<?PHP
switch ($plusy) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
        echo str_repeat("+",$plusy);
        break;
    default:
        echo "Wartość jest poza zakresem <0,10>";
        break;
}
?>
</pre>
</body>
</html>