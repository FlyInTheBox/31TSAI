<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>D</title>
</head>
<body>
<?PHP
$a = 97;
$b = 3.14;
$c = 'PHP';
?>
<h3 style="color: red"><?=$a?> jest liczbą pierwszą</h3>
<p style="color:rgb(255,99,71)">Liczba Pi zaokrąglona do dwóch miejsc po przecinku: <?=$b?></p>
<div style="color: green;text-decoration-line: underline;text-decoration-style:double;">
    <?= $c?> to język skryptowy wykonywany po stronie serwera
</div>
</body>
</html>