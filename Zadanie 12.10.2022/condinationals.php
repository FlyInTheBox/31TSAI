<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kondygnacje</title>
</head>
<body>
<?PHP
$losowa = rand(1, 30);
?>
<h2 style="color: darkorchid;text-align: center"><?= $losowa ?></h2>
<?PHP
if ($losowa > 20) {
    ?>
    <h4 style="color: magenta; text-align: center">Wylosowana liczba jest większa lub równa 20.</h4>
    <?PHP
}
if ($losowa % 2 == 0) {
    ?>
    <h4 style="text-align: center; color: navy">Losowa jest parzysta.</h4>
    <?PHP
} else {
    ?>
    <h4 style="text-align: center; color: navy">Losowa jest nieparzysta.</h4>
    <?PHP
}
if ($losowa <= 10) {
    ?>
    <h4 style="text-align: center; color: deeppink">Pierwsza dziesiątka.</h4>
    <?PHP
} elseif ($losowa <= 20) {
    ?>
    <h4 style="text-align: center; color: deeppink">Druga dziesiątka.</h4>
    <?PHP
} else {
    ?>
    <h4 style="text-align: center; color: deeppink">Trzecia dziesiątka.</h4>
    <?PHP
}
$miesiac=rand(1,15);
?>
<hr style="margin: 0;">
<h1 style="border: 4px dotted lightblue; text-align: center;">
    <?PHP
    echo $miesiac;
    ?>
</h1>
<h3 style="border: 2px pink;border-bottom-style: dashed;border-top-style: dashed; text-align:center;font-style: italic">
<?PHP
switch ($miesiac) {
    case 1:
    case 2:
    case 3:
        echo "I kwartał";
        break;
    case 4:
    case 5:
    case 6:
        echo "II kwartał";
        break;
    case 7:
    case 8:
    case 9:
        echo "III kwartał";
        break;
    case 10:
    case 11:
    case 12:
        echo "IV kwartał";
        break;
    default:
        echo "Błędny numer miesiąca";
}
?>
</h3>
</body>
</html>