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
        $login = $email = $kto = $page = $miasto = '';
        $login_blad = $email_blad = $kto_blad = $page_blad = $miasto_blad = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['login'])) {
                $login_blad = "Login jest wymagany!";
            } else {
                $login = $_POST['login'];
            }
            if (empty($_POST['email'])) {
                $email_blad = "Email jest wymaganany";
            } else {
                $email = $_POST['email'];
            }
            if (empty($_POST['gender'])) {
                $kto_blad = "Wybierz jedną opcję";
            } else {
                $kto = $_POST['gender'];
            }

            if (empty($_POST['miasto'])) {
                $miasto_blad = "Wybierz conajmniej jedno miasto";
            } else {
                $miasto = $_POST['miasto'];
            }

            if (empty($_POST['page'])) {
                $page_blad = "Strona internetowa jest wymagana";
            } else {
                $page = $_POST['page'];
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
    </fieldset>
</form>
</body>
</html>