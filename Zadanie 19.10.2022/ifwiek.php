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
$wiek = rand(1,100);
?>
<h1 style="border: 2px solid black">Mam <?=$wiek?> lat.</h1>
<h2 style="border: 2px dotted navy;">
<?PHP
if ($wiek < 18) {
    echo "Jeszcze nie możesz głosować";
}
elseif ($wiek < 21) {
    echo "Możesz tylko głosować";
}
elseif ($wiek < 30) {
    echo "Możesz głosować i kandydować do Sejmu";
}
elseif ($wiek < 35) {
    echo "Możesz głosować i kandydować do Sejmu i Senatu";
}
elseif ($wiek >= 35) {
    echo "Możesz głosować, kandydować do Sejmu i Senatu oraz na Prezydenta";
}
?>
</h2>
</body>
</html>