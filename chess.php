<!DOCTYPE html>
 <html> 
 	<head> 
  	<title></title>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>

  <body> 
  	<h3>Chess Board</h3>
  	 <table border="1px">
   	<!-- cell 270px wide (8 columns x 60px) -->
	    <?php
	    	$chess = 8;
	      for($row = 1; $row <= $chess; $row++) {
	          echo "<tr>";

	          for($col = 1; $col <= $chess; $col++) {
	          $total = $row + $col;
	          if($total %2 == 0) {
	          echo "<td height = 30px width = 30px bgcolor = #FFFFFF></td>";
	          }
	          else {
	          echo "<td height = 30px width = 30px bgcolor = #000000></td>";
	          }
	        }
	        echo "</tr>";
	    	}
	    ?>
  </table>
  </body>
</html>