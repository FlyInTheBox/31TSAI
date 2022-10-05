<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin: 0;
        }
        p{
            color: aliceblue;
            background-color: darkblue;
            font-weight: bold;
            margin:2px;
        }
    </style>
</head>
<body>
<p>Funkcja abs dla liczby -2 zwraca wartość: <?=abs(-2);?></p><br>
<p>Funkcja min dla zestawu liczb 0,150,30,20,-8,-200 zwraca wartość: <?=min(0,150, 30, 20,-8,-200);?></p><br>
<p>Funkcja min dla zestawu liczb 0,150,30,20,-8,-200 zwraca wartość: <?=max(0,150, 30, 20,-8,-200);?></p><br>
<p>Funkcja pi zwraca wartość: <?=pi();?></p><br>
<p>Funkcja round dla liczby 3,4 zwraca wartość: <?=round(3.4);?></p><br>
<p>Funkcja round dla liczby 3,6 zwraca wartość: <?=round(3.6);?></p><br>
<p>Funkcja round dla liczby 5.045 zwraca wartość: <?=round(5.045,2);?></p><br>
<p>Funkcja round dla liczby 5.045 zwraca wartość: <?=round(5.055,2);?></p><br>
<p>Funkcja rand dla liczb z przedziału od 900 do 1000 zwraca wartość: <?=rand(900,1000);?></p><br>
<p>Funkcja sqrt dla liczby 0 zwraca wartość: <?=sqrt(0);?></p><br>
<p>Funkcja sqrt dla liczby 25 zwraca wartość: <?=sqrt(25);?></p><br>
<p>Funkcja sqrt dla liczby 64 zwraca wartość: <?=sqrt(64);?></p><br>
<p>Funkcja sqrt dla liczby 65535 zwraca wartość: <?=sqrt(65535);?></p><br>


</body>
</html>
