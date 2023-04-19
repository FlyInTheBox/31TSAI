<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz z walidacją</title>
</head>
<body>
<form action="zadanie1.php" method="post">
    <fieldset style="border: 1px solid darkblue; background-color: lightblue">
        <?php
        $valid_input = true;
        $valid_message = '';
        $filename = 'formularz_zamowienia.txt';
        $product_name = $contact_email = $package_weight = $additional_information = $packing_options = $consent = '';
        $product_name_blad = $contact_email_blad = $package_weight_blad = $additional_information_blad = $packing_options_blad = $consent_blad = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

             if (empty($_POST['product_name'])) {
                 $product_name_blad = "Podaj nazwę produktu";
             } else {
                 $product_name = $_POST['product_name'];
             }
             if (empty($_POST['contact_email'])) {
                 $contact_email_blad = "Podaj poprawny adres email";
             } else {
                 $contact_email =  $_POST['contact_email'];
             }
             if (empty($_POST['additional_information'])) {
                 $additional_information_blad = "Wiadomość musi mieć conajmniej 15 znaków";
             } else {
                 $additional_information = $_POST['additional_information'];
             }
            if (empty($_POST['package_weight'])) {
                $package_weight_blad = "Określ przybliżoną wagę paczki";
                $valid_input = false;
            } else {
                $package_weight = $_POST['package_weight'];

            }

            if (empty($_POST['packing_options'])) {
                $packing_options_blad = "Wybierz opcje pakowania";
                $valid_input = false;
            } else {
                $packing_options = $_POST['packing_options'];
            }
            if (empty($_POST['consent'])) {
               $consent_blad = "Potwierdź swoją zgodę";
            } else {
                $consent = $_POST['consent'];
            }

            if($valid_input) {
                if (file_exists($filename)){
                    $myfile = fopen($filename, 'a');
                }
                else {
                    $myfile = fopen($filename, 'w');
                }
                $mydata = $product_name . ' | ' . $contact_email . ' | ' . $additional_information . ' | ' . implode(',', $packing_options) . ' | ' . implode('', $package_weight) . implode('', $consent) . ' | ' . date('Y-m-d H:i:s') . "\n";
                fwrite($myfile,$mydata);
                fclose($myfile);
                $valid_message = 'Dane z formularza zostały zapisane do pliku ' . $filename;
            }

        }

        ?>
        <label for="product_name">Nazwa towaru</label>
        <span style="color:red;">* </span><br>

        <input type="text" id="product_name" name="product_name"  value="<?= $product_name ?>"><br>
        <span style="color:red;"><?= $product_name_blad ?></span><br>

        <label for="#">Wybierz opcje pakowania </label>
        <span style="color: red">*</span><br>

        <input type="checkbox" id="koperta" name="packing_options[]"
               value="koperta" <?php if ($packing_options && strstr(implode('', $packing_options), 'koperta')) echo 'checked'; ?>>
        <label for="koperta">koperta</label><br>

        <input type="checkbox" id="folia" name="packing_options[]"
               value="folia" <?php if ($packing_options && strstr(implode('', $packing_options), 'folia')) echo 'checked'; ?>>
        <label for="folia">folia</label><br>

        <input type="checkbox" id="f.bąbelkowa" name="packing_options[]"
               value="f.bąbelkowa" <?php if ($packing_options && strstr(implode('', $packing_options), 'f.bąbelkowa')) echo 'checked'; ?>>
        <label for="f.bąbelkowa">folia bąbelkowa</label><br>

        <input type="checkbox" id="karton" name="packing_options[]"
               value="karton" <?php if ($packing_options && strstr(implode('', $packing_options), 'karton')) echo 'checked'; ?>>
        <label for="karton">karton</label><br>

        <input type="checkbox" id="kartonU" name="packing_options[]"
               value="k. z usztywnieniem" <?php if ($packing_options && strstr(implode('', $packing_options), 'kartonU')) echo 'checked'; ?>>
        <label for="kartonU">karton z usztywnieniem</label><br>
        <span style="color: red"><?= $packing_options_blad ?></span><br>

        <label for="#">Podaj wagę paczki </label>
        <span style="color: red">*</span><br>
        <input type="radio" id="do2" name="package_weight[]"
               value="2" <?php if ($package_weight && strstr(implode('', $package_weight), '2')) echo 'checked'; ?>>
        <label for="do2">do 2 kg</label><br>
        <input type="radio" id="od2do5" name="package_weight[]"
               value="5" <?php if ($package_weight && strstr(implode('', $package_weight), '5')) echo 'checked'; ?>>
        <label for="od2do5">od 2 do 5 kg</label><br>
        <input type="radio" id="od5do10" name="package_weight[]"
               value="10" <?php if ($package_weight && strstr(implode('', $package_weight), '10')) echo 'checked'; ?>>
        <label for="od5do10">od 5 do 10 kg</label><br>
        <input type="radio" id="od10do15" name="package_weight[]"
               value="15" <?php if ($package_weight && strstr(implode('', $package_weight), '15')) echo 'checked'; ?>>
        <label for="od10do15">od 10 do 15 kg</label><br>
        <span style="color: red"><?= $package_weight_blad ?></span><br>

        <label for="contact_email">Email kontatowy</label>

        <span style="color: red">* </span><br>
        <input type="text" id="contact_email" name="contact_email"  value="<?= $contact_email ?>"><br>
        <span style="color: red"> <?= $contact_email_blad ?></span><br>

        <label for="additional_information">Dodatkowe informacje</label>
        <span style="color:red;">*</span><br>
        <textarea id="additional_information" name="additional_information"><?= $additional_information?></textarea><br>
        <span style="color:red;"><?= $additional_information_blad ?></span><br>
        <input type="checkbox" id="consent" name="consent[]"
               value="true" <?php if ($consent && strstr(implode('', $consent), 'true')) echo 'checked'; ?>>
        <label for="consent">Zgoda na przetwarzanie danych</label>
        <span style="color: red">*</span><br>
        <span style="color: red"> <?= $consent_blad ?></span><br><br>

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