<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARAJE</title>
</head>
<body style="margin: 0">
<pre>
<?PHP
$owoce = array_fill(8, 5, "mango");
print_r($owoce);
?>
</pre>
<br>
<hr>
<pre>
<?PHP
$parzyste = range(0, 12, 2);
print_r($parzyste);
?>
</pre>
<br>
<hr>
<pre>
<?PHP
$dziesiatki = range(-10, 100, 10);
print_r($dziesiatki);
?>
</pre>
<br>
<hr>
<pre>
<?PHP
$polowki = range(-5.5, 5.5, 0.5);
print_r($polowki);
?>
</pre>
<br>
<hr>
<pre>
<?PHP
$litery_od_em = range("m", "u");
print_r($litery_od_em);
?>
</pre>
<br>
<hr>
<pre>
<?PHP
$litery_wstecz = range("x", "e");
rsort($litery_wstecz);
print_r($litery_wstecz);
?>
</pre>
<br>
<hr>
<pre>
    <?PHP
    $array = array("Tworzenie", "stron", "aplikacji", "internetowych");
    list($N1, $N2, $N3, $N4) = $array;
    echo $N1 . " " . $N2 . " i " . $N3 . " " . $N4 . " ";
    ?>
</pre>
<br>
<hr>
<table style="width: 100%; background-color: aliceblue; border-collapse: collapse">
    <tr>
        <?PHP
        $array1 = range(0, 10);
        shuffle($array1);
        foreach ($array1 as $i)
            echo "<td style='border: 1px solid dodgerblue; padding: 10px; text-align: center'> $i </td>";
        ?>
    </tr>
</table>
<br>
<hr>
<pre>
<?PHP
$numbers = array(rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99));
rsort($numbers);
print_r($numbers);
?>
</pre>
</body>
</html>
