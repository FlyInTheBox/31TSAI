﻿<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Formularz</title>
    </head>
    <body>
      <h3>Pracownicy</h3>
      <?php

          ini_set('display_errors', '0');
  
          $host  = 'localhost'; 
          $user  = 'root';
          $haslo = '';
          $baza  = 'baza_testowa';
        
          $id_conn = mysqli_connect($host, $user, $haslo, $baza);
          if (mysqli_connect_errno()) 
          {
            echo "Błąd połączenia z MySQL z bazą: " . $baza . ' (' . mysqli_connect_error() . ')';
            exit;
          }

          $sql_tit = "SELECT name FROM title;";
	  $wyn_tit = mysqli_query($id_conn, $sql_tit);
          if (mysqli_errno($id_conn)) 
          {
            echo "Błąd w zapytania o stanowiska: " . $baza . ' (' . mysqli_error($id_conn) . ')';
	    mysqli_close($id_conn);
            exit;
          }

       ?>


      <table cellspacing="0" cellpadding="0" border="0" style="width: 26%;" align="Left">
      <tbody align="Left">
 	<form action='_MN_ins_prac.php' method='post'>
      	    <tr><td width="160">Nazwisko:</td><td><input type='text' name='nazwisko' ></td></tr>
	    <tr><td>Imię:       </td><td><input type='text' name='imie'     ></td></tr>
	    <tr><td>Użytkownik: </td><td><input type='text' name='userid'   ></td></tr>
	    <tr><td>Stanowisko: </td><td>
       
         		<select id="Stanowiska" name="title">
			    <?php $tit = '';
			         $w_tit = mysqli_fetch_array($wyn_tit);
			         $title = $w_tit['name'];
			    ?>
			         <option value=<?php printf("%s", "'" . $title . "'"); ?> selected><?php printf("%s", $title); ?></option>
			    <?php
			         while ($w_tit = mysqli_fetch_array($wyn_tit))   
			         {  
				     $title = $w_tit['name']; 
			    ?>  
			             <option value=<?php printf("%s", "'" . $title . "'"); ?>><?php printf("%s", $title); ?></option>
			    <?php
			         }    
			    ?> 
		       </select> 
									     </td></tr> 
 	    <tr><td>Departament:</td><td><input type='text' name='dept_id'  ></td></tr>
	    <tr><td>Zarobki:    </td><td><input type='text' name='salary'   ></td></tr> 
	    <tr><td>Data:       </td><td><input type='text' name='start_dt' ></td></tr> 
	    <tr><td>ID managera:</td><td><input type='text' name='man_id'   ></td></tr>
 	    <tr><td>Uwagi:      </td><td><input type='text' name='uwagi'    ></td></tr>
	    <tr><td><p><input type='submit' value='Wyślij'></td></tr>
	</form>
      </tbody>
      </table>  
    </body>
</html>