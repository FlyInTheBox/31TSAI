<?php
$sql_mgr = "SELECT id, last_name FROM emp";
$wyn_mgr = mysqli_query($id_conn, $sql_mgr);
if (!$wyn_mgr || mysqli_error($id_conn)) {
echo "Błąd w zapytaniu o departamenty: " . $baza . '(' . mysqli_error($id_conn) . ')';
mysqli_close($id_conn);
exit;
}

$ok_mgr = 0;
$mgrs = '';
while ($w_mgr = mysqli_fetch_array($wyn_mgr)) {
if ($w_mgr['id'] == $mid) {
$ok_mgr = 1;
}
$mgrs .= ', <br> -' . $w_mgr['id'] . ", " . $w_mgr['last_name'];
}

if ($ok_mgr == 0) {
echo 'Nie ma menadżera "' . $mid . '", wybierz jeden z poniższych: ';
echo '<br>' . substr($mgrs, 6);
}

?>