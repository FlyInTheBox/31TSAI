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
            <legend>lorem 50</legend>
            <?PHP
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                echo '<h4>Oto wpisany tekst:</h4>'.'<p style="color: red; font-style: italic">'.$_POST["tekst"].'</p>';
            }
            else {
                echo '<textarea name="tekst" cols="50" rows="5">';
                echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi facilis iste itaque nesciunt provident recusandae sapiente similique. A asperiores consequuntur corporis eaque illo in maxime molestiae quam qui reprehenderit repudiandae rerum sunt tempora vitae, voluptatum? Aliquid at quas quidem voluptates voluptatum. Delectus doloremque iure magnam nemo odit quisquam voluptates.";
                echo '</textarea><br><input type="submit">';
            }
            ?>
        </fieldset>
            <br>
    </form>
</body>

