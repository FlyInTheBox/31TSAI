<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz z walidacją</title>
</head>
<body>
<form action="index.php" method="post">
    <fieldset style="border: 1px solid darkgreen; background-color: lightgreen">
        <legend style="border:1px solid darkgreen;background-color: lightgreen">Formularz z walidacją</legend>
        <?php
        $valid_input = true;
        $valid_message = '';
        $filename = 'ankieta.txt';
        $login = $email = $kto = $page = $miasto = '';
        $login_blad = $email_blad = $kto_blad = $page_blad = $miasto_blad = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
                $email_blad = "Email jest nieprawidłowy!";
                $valid_input = false;
            }

            $page = filter_var($_POST['page'], FILTER_SANITIZE_URL);
            if (!filter_input(INPUT_POST, 'page', FILTER_VALIDATE_URL)) {
                $page_blad = "Strona internetowa jest nieprawidłowa!";
                $valid_input = false;
            }

        }
        if (empty($_POST['login'])) {
            $login_blad = "Login jest wymagany!";
            $valid_input = false;
        } else {
            $login = trim($_POST['login']);
            $login = filter_var($login, FILTER_SANITIZE_STRING);
            if (strstr($login, ' ')) {
                $login_blad = "Login nie może zawierać spacji";
                $valid_input = false;
            }


            /* if (empty($_POST['login'])) {
                 $login_blad = "Login jest wymagany!";
             } else {
                 $login = $_POST['login'];
             }
             if (empty($_POST['email'])) {
                 $email_blad = "Email jest wymaganany";
             } else {
                 $email =  $_POST['email'];
             }
             if (empty($_POST['page'])) {
                 $page_blad = "Strona internetowa jest wymagana";
             } else {
                 $page = $_POST['page'];
             }*/
            if (empty($_POST['gender'])) {
                $kto_blad = "Wybierz jedną opcję";
                $valid_input = false;
            } else {
                $kto = $_POST['gender'];

            }

            if (empty($_POST['miasto'])) {
                $miasto_blad = "Wybierz conajmniej jedno miasto";
                $valid_input = false;
            } else {
                $miasto = $_POST['miasto'];
            }

        if($valid_input) {
            if (file_exists($filename)){
                $myfile = fopen($filename, 'a');
            }
            else {
                $myfile = fopen($filename, 'w');
            }
            $mydata = $login . ' | ' . $email . ' | ' . $page . ' | ' . implode(',', $miasto) . ' | ' . implode('', $kto) . ' | ' . date('Y-m-d H:i:s') . "\n";
            fwrite($myfile,$mydata);
            fclose($myfile);
            $valid_message = 'Dane z formularza zostały zapisane do pliku ' . $filename;
        }

        }

        ?>
        <label for="login">Login:</label>
        <span style="color:red;">* <?= $login_blad ?></span><br>

        <input type="text" id="login" name="login" placeholder="podaj login" value="<?= $login ?>"><br><br>
        <label for="email">Email:</label>

        <span style="color: red">*  <?= $email_blad ?></span><br>
        <input type="text" id="email" name="email" placeholder="podaj email" value="<?= $email ?>"><br><br>

        <label for="page">Strona internetowa:</label>
        <span style="color:red;">* <?= $page_blad ?></span><br>
        <input type="text" id="page" name="page" placeholder="podaj stronę internetową" value="<?= $page ?>"><br><br>
        <br>

        <label for="#">Wybierz miasto/miasta: </label>
        <span style="color: red">* <?= $miasto_blad ?></span><br>

        <input type="checkbox" id="warszawa" name="miasto[]"
               value="warszawa" <?php if ($miasto && strstr(implode('', $miasto), 'warszawa')) echo 'checked'; ?>>
        <label for="warszawa">Warszawa</label><br>

        <input type="checkbox" id="poznan" name="miasto[]"
               value="poznan" <?php if ($miasto && strstr(implode('', $miasto), 'poznan')) echo 'checked'; ?>>
        <label for="poznan">Poznań</label><br>

        <input type="checkbox" id="gdansk" name="miasto[]"
               value="gdansk" <?php if ($miasto && strstr(implode('', $miasto), 'gdansk')) echo 'checked'; ?>>
        <label for="gdansk">Gdańsk</label><br>

        <input type="checkbox" id="szczecin" name="miasto[]"
               value="szczecin" <?php if ($miasto && strstr(implode('', $miasto), 'szczecin')) echo 'checked'; ?>>
        <label for="szczecin">Szczecin</label><br><br>

        <label for="#">Wybierz jedną opcję </label>
        <span style="color: red">* <?= $kto_blad ?></span><br>
        <input type="radio" id="kobieta" name="gender[]"
               value="kobieta" <?php if ($kto && strstr(implode('', $kto), 'kobieta')) echo 'checked'; ?>>
        <label for="kobieta">kobieta</label><br>
        <input type="radio" id="mezczyzna" name="gender[]"
               value="mezczyzna" <?php if ($kto && strstr(implode('', $kto), 'mezczyzna')) echo 'checked'; ?>>
        <label for="mezczyzna">mężczyzna</label><br>
        <input type="radio" id="unknown" name="gender[]"
               value="unknown" <?php if ($kto && strstr(implode('', $kto), 'unknown')) echo 'checked'; ?>>
        <label for="unknown">nie chcę podawać</label><br><br>
        <button type="submit">Wyślij</button>
        <?PHP
        if ($valid_message != ''){
            echo $valid_message;
        }
        ?>
    </fieldset>
</form>
</body>
</html>