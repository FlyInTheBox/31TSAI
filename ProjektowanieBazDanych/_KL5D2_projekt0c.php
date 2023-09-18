<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Nowak Klasa 5D2">
	<title>Strona główna</title>
</head>
<body>
    <h2 align="center">Baza danych Nowak, Klasa 5D2</h2>
    <?php
       ini_set('display_errors', '0'); # wyłączenie komunikatów systemowych`
        mysqli_report(MYSQLI_REPORT_ERROR);

        $baza   = 'baza_testowa';
        $host   = 'localhost';
        $user   = 'root';
        $passwd = '';

        $id_conn = mysqli_connect($host, $user, $passwd, $baza);
        $conn_err = mysqli_connect_errno();
        if ($conn_err)
        {
            switch($conn_err)
    	    {
	        case 1049:
	            $kom="Nieprawidłowa nazwa bazy danych (" . $baza . ")";
    		    break;
	        case 2002:
	            $kom="Nieprawidłowa nazwa hosta (" . $host . ")";
		    break;
                case 1045:
	            $kom="Nieprawidłowe hasło";
		    break;
   	        default:
                    $kom="Inny błąd " . mysqli_connect_error();
                    break;
	    }
            echo "Błąd połączenia z MySQL nr " . $conn_err . ": " . $kom;
            exit; 
        }

        $zapytanie = "SELECT emp.id as ID, 
                             emp.first_name as imie, 
                             emp.last_name as nazwisko,
                             emp.userid as uzytkownik,
                             emp.comments as komentarz,
                             emp.start_date as data_rozpoczecia
                        FROM emp
                       WHERE emp.last_name LIKE 'n%';";

        $wynik = mysqli_query($id_conn, $zapytanie); 
        $errno = mysqli_errno($id_conn);
        if (!$wynik) {
	    switch($errno)
    	    {
	        case 1054:
	            $kom="Błąd 1054: Nieznana kolumna (" .mysqli_error($id_conn) . ")";
		    break;
	        case 1146:
	            $kom="Błąd 1146: Tabela nie istnieje (" .mysqli_error($id_conn) . ")";
		    break;
	        case 1064:
	            $kom="Błąd 1064: Błąd składni SQL (" . $zapytanie . ")";
		    break;
   	        default:
                    $kom="Inny błąd: " . mysqli_errno($id_conn) . " (" .mysqli_error($id_conn) . ")";
                    break;
	   }
           echo 'Nie mogę wykonać zapytania: ' . $kom;
           mysqli_close($id_conn);  # zamyka połączenie z bazą
   	   exit;
        }
    ?>
        <table cellspacing="0" cellp	adding="0" border="1" style="width: 90%;" align="center">
        <tbody align="Center">
        <tr bgcolor="#A000FF" >
          <td>ID</td>
          <td>NAZWISKO</td>
          <td>IMIĘ</td>
          <td>USER ID</td>
          <td>UWAGI</td>
          <td>DATA REJESTRACJI</td>
        </tr>
   <?php
            while ($row = mysqli_fetch_array($wynik))     #row-zmienna 
            {
                echo '<tr><td>';
                printf("%d", $row['ID']);
                echo '</td><td>';
                printf("%s", $row['nazwisko']);
                echo '</td><td>';
                printf("%s", $row['imie']);
                echo '</td><td>';
                printf("%s", $row['uzytkownik']);
                echo '</td><td>';
                printf("%s", $row['komentarz']);
                echo '</td><td>';
                printf("%s", $row['data_rozpoczecia']);
                echo '</td></tr>';
            }
            mysqli_free_result($wynik);  #zwalnia pamięć zarezerwowaną na tablicę $wynik
        ?>
        </tbody>
        </table>
        <?php
            mysqli_close($id_conn);  # zamyka połączenie z bazą
        ?>
</body>
</html>