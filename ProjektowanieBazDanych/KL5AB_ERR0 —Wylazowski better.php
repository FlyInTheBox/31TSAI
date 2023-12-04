<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Nowak Klasa 3Dg">

	<title>Strona główna</title>
</head>
<body>
    <h2 align="center">Baza danych Nowak, Klasa 3Dg1/2</h2>
    <?php
        ini_set('display_errors', '0'); # wyłączenie komunikatów systemowych
        mysqli_report(MYSQLI_REPORT_ERROR);

	$host='localhost';
        $user='root';
        $pass='';
        $baza='baza_testowa';   
        $id_conn = mysqli_connect($host, $user, $pass, $baza);
        
        $conn_err = mysqli_connect_errno();

        if ($conn_err)
        {
            switch($conn_err) {

	        case 1049:
	           $kom="Nieprawidłowa nazwa bazy danych ('" . $baza . "')";
		   break;
	        case 2002:
	           $kom="Nieprawidłowa nazwa hosta ('" . $host . "')";
		   break;
                case 1045:
	           $kom="Nieprawidłowe hasło.";
	   	   break;
   	        default:
                   $kom="Inny błąd " . mysqli_connect_error();
                   break;
	    }
            echo "Błąd połączenia z MySQL nr " .  $conn_err . ": " . $kom;
            exit; 
        }

        $zapytanie = "SELECT ord.id,
                             customer.name,
                             CONCAT(emp.last_name, ' ', emp.first_name) AS 'sprzedawca',
  			     ord.date_ordered,
 			     ord.total,
                             item.item_id,
                             product.name                               AS 'produkt',
 			     item.price
   			     item.quantity
                        FROM ord INNER  JOIN customer     ON ord.customer_id  = customer.id
                                 INNER  JOIN emp          ON ord.sales_rep_id = emp.id
                                 LEFT OUTER JOIN item     ON item.ord_id      = ord.id
                                 LEFT OUTER JOIN product  ON product.id       = item.product_id 
	               WHERE (ord.customer_id = 210 OR ord.sales_rep_id = 12);";

        $wynik = mysqli_query($id_conn, $zapytanie); 

 	$errno = mysqli_errno($id_conn);

        if ($wynik) 
        {
	    switch($errno)
    	    {
	       case 1054:
	          $kom="Błąd 1054: Nieznana kolumna (" . $errno . ")";
	 	  break;
	       case 1146:
	          $kom="Błąd 1146: Tabela nie istnieje (" . $errno  . ")";
		  break;
	       case 1064:
	          $kom="Błąd 1064: Błąd składni SQL (" . $errno  . mysqli_error($id_conn) . ")" ;
		  break;
   	       default:
                  $kom= "Inny błąd (" . $errno  . mysqli_error($id_conn) . ")";
                  break;
	   }

           echo 'Nie mogę wykonać zapytania: ' . $kom;
           mysqli_close($id_conn);  # zamyka połączenie z bazą
   	   exit;
        }


    ?>
    	<br><br>
    	<table cellspacing="0" cellpadding="0" border="1" 
            style="width: 90%;" align="center">
            <tbody align="center">
           	<tr bgcolor="#A000FF" >
                    <td>ID ZLEC.</td>
                    <td>KLIENT</td>
                    <td>SPRZEDAWCA</td>
                    <td>DATA ZLEC.</td>
                    <td>WARTOŚĆ</td>
                    <td>LP</td>
                    <td>PRODUKT</td>
                    <td>CENA</td>
                    <td>ILOŚĆ</td>
                </tr>
    <?php
            while ($row = mysqli_fetch_array($wynik)) #row-zmienna 
            { 
?>
	        <tr height = "20">	
		    <td> <?php printf("%d", $row['id']);    	 ?> </td>
		    <td> <?php printf("%s", $row['name']);  ?> </td>
    		    <td> <?php printf("%s", $row['sprzedawca']); ?> </td>
		    <td> <?php printf("%s", $row['date_ordered']);     ?> </td>
         	    <td> <?php printf("%s", $row['total']);   ?> </td>
		    <td> <?php printf("%s", $row['item_id']);  ?> </td>
    		    <td> <?php printf("%s", $row['produkt']); ?> </td>
		    <td> <?php printf("%s", $row['price']);     ?> </td>
         	    <td> <?php printf("%s", $row['quantity']);   ?> </td>
<?php
            }
    ?>
           </tbody>
       </table> 
    <?php
        mysqli_close($id_conn);  # zamyka połączenie z bazą

    ?>
</body>
</html>