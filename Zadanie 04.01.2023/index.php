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
<p>Aktualna godzina:
<?PHP
echo date("G:i:s");
?>
</p>
<p>Osiem godzin później:
<?PHP
echo date("G:i:s",time() + 28800);
?>
</p>
<p>Rozpoczęcie tego roku szkolnego odbyło się w
<?PHP
$dzien = date("z",mktime(0,0,0,9,1,2022)) + 1;
echo date("l",mktime(0,0,0,9,1,2022))." i był to ".$dzien." dzień roku.";
?>
</p>
<p>
    <?PHP
    echo "Najbliższy Sylwester odbędzie się w ".date("N",strtotime("31 December"))." dniu tygodnia."
    ?>
</p>
<p>
    <?PHP
    $dni = array(
            1=>"Poniedziałek",
            2=>"Wtorek",
            3=>"Środę",
            4=>"Czwartek",
            5=>"Piątek",
            6=>"Sobotę",
            7=>"Niedzielę"
    );
    $miesiace = array(
            1=>"Stycznia",
            2=>"Lutego",
            3=>"Marca",
            4=>"Kwietnia",
            5=>"Maja",
            6=>"Czerwca",
            7=>"Lipca",
            8=>"Sierpnia",
            9=>"Września",
            10=>"Października",
            11=>"Listopada",
            12=>"Grudnia"
    );
    $x = mktime(0,0,0,9,1,2077);
    echo "Urodziłem się w ".$dni[date("N")].", ".date("j")." ".$miesiace[date("n")]." ".date("Y")." roku.";
    ?>
</p>
<p>
    <?PHP
    echo "Umrę w zamachu w ".$dni[date("N",$x)].", ".date("j",$x)." ".$miesiace[date("n",$x)]." ".date("Y",$x)." roku.";
    ?>
</p>
</body>
</html>
