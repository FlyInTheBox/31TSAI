<!doctype html>
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
      $sql_dept = "SELECT dept.id, dept.name, region.name AS region  FROM dept JOIN region ON dept.region_id = region.id;";
      $wyn_dept = mysqli_query($id_conn, $sql_dept);
      if (mysqli_errno($id_conn))
      {
          echo "Błąd w zapytania o departament: " . $baza . ' (' . mysqli_error($id_conn) . ')';
          mysqli_close($id_conn);
          exit;
      }
       
       $sql_mid = "SELECT DISTINCT szef.id, szef.last_name FROM emp AS szef INNER JOIN emp AS prac ON szef.id = prac.manager_id;";
      $wyn_mid = mysqli_query($id_conn, $sql_mid);
      if (mysqli_errno($id_conn))
      {
          echo "Błąd w zapytania o managera: " . $baza . ' (' . mysqli_error($id_conn) . ')';
          mysqli_close($id_conn);
          exit;
      }
       ?>


      <table cellspacing="0" cellpadding="0" border="0" style="width: 26%;" align="Left">
      <tbody align="Left">
 	<form action='ins_prac.php' method='post'>
      	    <tr><td width="160">Nazwisko:</td><td><input type='text' id="lastname" name='nazwisko' onchange="usernameR()"></td></tr>
	    <tr><td>Imię:       </td><td><input onchange="usernameR()" type='text' id="firstname" name='imie'     ></td></tr>
	    <tr><td>Użytkownik: </td><td><input type='text' name='userid' id="userid"></td></tr>
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
 	    <tr><td>Departament:</td><td>
                <select id="Departament" name="dept_id">
                    <?php $dept = '';
                    $w_dept = mysqli_fetch_array($wyn_dept);
                    $deptle1 = $w_dept['id'];
                    ?>
                    <option value=<?php printf("%s", "'" . $deptle . "'"); ?> selected><?php printf("%s", $deptle); ?></option>
                    <?php
                    while ($w_dept = mysqli_fetch_array($wyn_dept))
                    {
                        $deptle1 = $w_dept['id'];
                        $deptle = $w_dept['id'] . '|' . $w_dept['name'] . '|' . $w_dept['region'];
                        ?>
                        <option value=<?php printf("%s", "'" . $deptle1 . "'"); ?>><?php printf("%s", $deptle); ?></option>
                        <?php
                    }
                    ?>
                </select></td></tr>
	    <tr><td>Zarobki:    </td><td><input type='text' name='salary'   ></td></tr> 
	    <tr><td>Data:       </td><td><input type='date' name='start_dt' ></td></tr> 
	    <tr><td>ID managera:</td><td><select id="Manager" name="man_id">
        <?php $mid = '';
			         $w_mid = mysqli_fetch_array($wyn_mid);
			         $midle1 = $w_mid['id'];
			    ?>
			         <option value=<?php printf("%s", "'" . $midle . "'"); ?> selected><?php printf("%s", $midle); ?></option>
			    <?php
			         while ($w_mid = mysqli_fetch_array($wyn_mid))   
			         {
                         $midle1 = $w_mid['id'];
                         $midle = $w_mid['id'] . ' | ' . $w_mid['last_name'];
			    ?>  
			             <option value=<?php printf("%s", "'" . $midle1 . "'"); ?>><?php printf("%s", $midle); ?></option>
			    <?php
			         }    
			    ?> 
		       </select> </tr>
 	    <tr><td>Uwagi:      </td><td><input type='text' name='uwagi'    ></td></tr>
	    <tr><td><p><input type='submit' value='Wyślij'></td></tr>
	</form>
      </tbody>
      </table>
      <script>
          function usernameR() {
            let firstname = document.getElementById('firstname').value;
            let lastname = document.getElementById('lastname').value;
            let output = firstname.substring(0,1) + lastname.substring(0,6);
            document.getElementById('userid').value = output.toLowerCase();
          }
      </script>
    </body>
</html>