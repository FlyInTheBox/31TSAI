<?php $mid = '';
			         $w_mid = mysqli_fetch_array($wyn_mid);
			         $midle = $w_mid['name'];
			    ?>
			         <option value=<?php printf("%s", "'" . $midle . "'"); ?> selected><?php printf("%s", $midle); ?></option>
			    <?php
			         while ($w_mid = mysqli_fetch_array($wyn_mid))   
			         {  
				     $midle = $w_mid['name']; 
			    ?>  
			             <option value=<?php printf("%s", "'" . $midle . "'"); ?>><?php printf("%s", $midle); ?></option>
			    <?php
			         }    
			    ?> 