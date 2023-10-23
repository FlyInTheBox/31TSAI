<?php $sql_dept = "SELECT id FROM dept;";
$wyn_dept = mysqli_query($id_conn, $sql_dept);
if (mysqli_error($id_conn)) {
    echo "Błąd w zapytaniu o stanowiska: " . $baza . '(' . mysqli_error($id_conn) .')';
    mysqli_close($id_conn);
    exit;
}

$ok_dept = 0;
$depts = '';
$dept = '';
while($w_dept=mysqli_fetch_array($wyn_dept)) {
    if ($w_dept['id'] == $dept) {
        $ok_dept = 1;
    }
    $depts = $depts . ', <br> -' . $w_dept['id'];
}

if($ok_dept == 0) {
    echo 'Nie ma departamentu "' .$dept . '", wybierz jedno z poniższych: ';
    echo '<br>' . substr($depts, 6);
    mysqli_close($id_conn);
    exit;
}
