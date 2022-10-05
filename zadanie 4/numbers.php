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
<?PHP
$a = 4;
$b = 35;
$c = 1.2;
$d = 0.620;
$f = "59.85" + 100;
$aint = is_int($a);
$bint = is_int($b);
$cint = is_int($c);
$dint = is_int($d);
$afl = is_float($a);
$bfl = is_float($b);
$cfl = is_float($c);
$dfl = is_float($d);
$fnum = is_numeric($f);



echo "Zmienna a ma wartość ";
var_dump($a);
echo "a funkcja is_int zwraca dla niej wynik ";
var_dump($aint);
echo "<br>";
echo "Zmienna b ma wartość ";
var_dump($b);
echo "a funkcja is_int zwraca dla niej wynik ";
var_dump($bint);
echo "<br>";
echo "Zmienna c ma wartość ";
var_dump($c);
echo "a funkcja is_int zwraca dla niej wynik ";
var_dump($cint);
echo "<br>";
echo "Zmienna d ma wartość ";
var_dump($d);
echo "a funkcja is_int zwraca dla niej wynik ";
var_dump($dint);
echo "<br>"."<hr>";



echo "Zmienna a ma wartość ";
var_dump($a);
echo "a funkcja is_float zwraca dla niej wynik ";
var_dump($afl);
echo "<br>";
echo "Zmienna b ma wartość ";
var_dump($b);
echo "a funkcja is_float zwraca dla niej wynik ";
var_dump($bfl);
echo "<br>";
echo "Zmienna c ma wartość ";
var_dump($c);
echo "a funkcja is_float zwraca dla niej wynik ";
var_dump($cfl);
echo "<br>";
echo "Zmienna d ma wartość ";
var_dump($d);
echo "a funkcja is_float zwraca dla niej wynik ";
var_dump($dfl);
echo "<br>"."<hr>";

echo "Zmienna f ma wartość ";
var_dump($f);
echo " a funkcja is_numeric zwraca dla niej wynik ";
var_dump($fnum);
echo"<br><hr>";

echo "Stała PHP_INT_MAX ma wartość ".PHP_INT_MAX."<br>";
echo "Stała PHP_INT_MIN ma wartość ".PHP_INT_MIN."<br>";
echo "Stała PHP_INT_SIZE ma wartość ".PHP_INT_SIZE."<br>";
echo "Stała PHP_FLOAT_MAX ma wartość ".PHP_FLOAT_MAX."<br>";
echo "Stała PHP_FLOAT_MIN ma wartość ".PHP_FLOAT_MIN."<br>";
echo "Stała PHP_FLOAT_DIG ma wartość ".PHP_FLOAT_DIG."<br>";
echo "Stała PHP_FLOAT_EPSILON ma wartość ".PHP_FLOAT_EPSILON."<br>";
echo "<hr>";

$x = 5;
$y = 15;
echo "Wynik dodawania ".$x." i ".$y." wynosi ".$x+$y."<br>";
echo "Wynik odejmowania ".$x." i ".$y." wynosi ".$x-$y."<br>";
echo "Wynik mnożenia ".$x." i ".$y." wynosi ".$x*$y."<br>";
echo "Wynik dzielenia ".$x." i ".$y." wynosi ".$x/$y."<br>";
echo "Reszta z dzielenia ".$x." i ".$y." wynosi ".$x%$y."<br>"."<hr>";



echo "Obwód prostokąta o bokach długości ".$a." i ".$b." wynosi ".$a+$a+$b+$b." j"."<br>";
echo "Pole prostokąta o bokach długości ".$a." i ".$b." wynosi ".$a*$b." j²";
?>

</body>
</html>
