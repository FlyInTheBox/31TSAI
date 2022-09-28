<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?PHP
define('DOBRA_RADA',"Bez chleba, to się nie najesz.");
echo DOBRA_RADA."<br>";
echo strlen(DOBRA_RADA)."<br>";
echo str_word_count(DOBRA_RADA)."<br>";
echo strrev(DOBRA_RADA)."<br>";
echo strpos(DOBRA_RADA, "to")."<br>";
echo str_replace("chleba","mięsa",DOBRA_RADA)."<br>";
echo strtolower(DOBRA_RADA)."<br>";
echo strtoupper(DOBRA_RADA)."<br>";
echo ucwords(DOBRA_RADA)."<br>";
echo trim(DOBRA_RADA)."<br>";
echo strstr(DOBRA_RADA, "nie")."<br>";
echo substr(DOBRA_RADA,10,5)."<br>";
echo str_pad(DOBRA_RADA,"37","-_-",STR_PAD_BOTH)."<br>";
?>
</body>
</html>
