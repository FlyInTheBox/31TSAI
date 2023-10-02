<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strona główna</title>
</head>
<body>
<h2 align="center">Baza danych Wylazowski, Klasa 5D2</h2>
<?php
$id_conn = mysqli_connect('localhost', 'root', '', 'baza_testowa');
$zapytanie = "SELECT ord.id,            
       customer.name,      
       DATE_FORMAT(ord.date_ordered,'%Y-%m-%d, %W')  AS 'data',   
       CONCAT(emp.last_name, ' ', emp.first_name)    AS 'sprzed',
       CONCAT(szef.last_name, ' ', szef.first_name)    AS 'szef',
       ord.total,         
       IFNULL(item.item_id, 'B.D.')                  AS 'id',
       IFNULL(product.name, 'Brak danych')           AS 'prod',       
       IFNULL(item.quantity, '-----')                AS 'ilosc',      
       IFNULL(item.price, '-----')                   AS 'cena'
  FROM ord INNER JOIN customer        ON customer.id = ord.customer_id
           INNER JOIN emp             ON emp.id      = ord.sales_rep_id
           JOIN emp as szef           ON szef.id     = emp.manager_id
           LEFT OUTER JOIN item       ON item.ord_id = ord.id
           LEFT OUTER JOIN product    ON product.id  = item.product_id;";
$wynik = mysqli_query($id_conn, $zapytanie);
?>
<table cellspacing="0" cellpadding="0" border="1" style="width: 90%;" align="center">
    <tbody align="center">
    <tr bgcolor="#A000FF">
        <td>ID</td>
        <td>Nazwa Klienta</td>
        <td>Data zamówienia</td>
        <td>Sprzedawca</td>
        <td>Szef</td>
        <td>Wartość</td>
        <td>ID</td>
        <td>Nazwa produktu</td>
        <td>Ilość</td>
        <td>Cena</td>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($wynik)) {
        echo '<tr><td>';
        printf("%d", $row['id']);
        echo '</td><td>';
        printf("%s", $row['name']);
        echo '</td><td>';
        printf("%s", $row['data']);
        echo '</td><td>';
        printf("%s", $row['sprzed']);
        echo '</td><td>';
        printf("%s", $row['szef']);
        echo '</td><td>';
        printf("%s", $row['total']);
        echo '</td><td>';
        printf("%s", $row['id']);
        echo '</td><td>';
        printf("%s", $row['prod']);
        echo '</td><td>';
        printf("%s", $row['ilosc']);
        echo '</td><td>';
        printf("%s", $row['cena']);
        echo '</td></tr>';
    }
    ?>
    </tbody>
</table>
</body>
</html>
