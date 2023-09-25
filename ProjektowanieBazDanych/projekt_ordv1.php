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
                            DATE_FORMAT(ord.date_ordered,'%Y-%m-%d') as date_ordered,
                            DATE_FORMAT(ord.date_shipped,'%Y-%m-%d') as date_shipped,
                            CONCAT(emp.first_name,' ',emp.last_name) as sprzedawca,
                            ord.total,
                            ord.payment_type,
                            ord.order_filled,
                            product.name as nazwaProduktu,
                            item.price,
                            item.quantity
                       FROM ord join customer on customer.id=ord.customer_id
                        join emp on ord.sales_rep_id=emp.id
                        join item on ord.id = item.ord_id 
                        join product on product.id = item.product_id
                        WHERE ord.id >= 100;";
$wynik = mysqli_query($id_conn, $zapytanie);
?>
<table cellspacing="0" cellpadding="0" border="1" style="width: 90%;" align="center">
    <tbody align="center">
    <tr bgcolor="#A000FF">
        <td>ID</td>
        <td>Nazwa Klienta</td>
        <td>Data zamówienia</td>
        <td>Data dostarczenia</td>
        <td>Sprzedawca</td>
        <td>Wartość</td>
        <td>Typ płatności</td>
        <td>Status</td>
        <td>Nazwa produktu</td>
        <td>Cena</td>
        <td>Ilość</td>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($wynik)) {
        echo '<tr><td>';
        printf("%d", $row['id']);
        echo '</td><td>';
        printf("%s", $row['name']);
        echo '</td><td>';
        printf("%s", $row['date_ordered']);
        echo '</td><td>';
        printf("%s", $row['date_shipped']);
        echo '</td><td>';
        printf("%s", $row['sprzedawca']);
        echo '</td><td>';
        printf("%s", $row['total']);
        echo '</td><td>';
        printf("%s", $row['payment_type']);
        echo '</td><td>';
        printf("%s", $row['order_filled']);
        echo '</td><td>';
        printf("%s", $row['nazwaProduktu']);
        echo '</td><td>';
        printf("%s", $row['price']);
        echo '</td><td>';
        printf("%s", $row['quantity']);
        echo '</td></tr>';
    }
    ?>
    </tbody>
</table>
</body>
</html>
