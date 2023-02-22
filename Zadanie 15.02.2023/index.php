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
    <label for="space">Usuń "białe" znaki</label>
    <input id="space" name="space" type="text"><br>
    <label for="slash">Usuń ukośniki (backslash)</label>
    <input id="slash" name="slash" type="text"><br>
    <label for="special">zmień znaki HTML na tzw.encje</label>
    <input id="special" name="special" type="text"><br>
    <button type="submit">Wyślij</button>
</form>
<br><hr><br>
<?PHP
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo var_dump($_POST)."<br>";
        echo var_dump(trim($_POST['space']))."<br>";
        echo var_dump(stripcslashes($_POST['slash']))."<br>";
        echo var_dump(htmlspecialchars($_POST['special']))."<br>";
   } ?>
<br><hr><br>
<form>
    <fieldset>
        <legend>Roczniki</legend>
        <?PHP
        for ($i=2010;$i<=2025;$i++){
            echo "<label><input type='radio' name='rok' id='$i' value='$i'>$i</label><br>";
        }
        ?>
    </fieldset>
    <br>
    <select>
    <?PHP
    $miesiace = array(
        1=>"Styczeń",
        2=>"Luty",
        3=>"Marzec",
        4=>"Kwiecień",
        5=>"Maj",
        6=>"Czerwiec",
        7=>"Lipiec",
        8=>"Sierpień",
        9=>"Wrzesień",
        10=>"Październik",
        11=>"Listopad",
        12=>"Grudzień"
    );
    foreach ($miesiace as $key => $value) {
        if ($key != date("m")) {
        echo '<option value="'.$value.'">'.$value.'</option>';
        }
        else {
            echo '<option selected value="'.$value.'">'.$value.'</option>';
        }
    }
    ?>
    </select>
</html>