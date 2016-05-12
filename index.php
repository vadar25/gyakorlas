<?php 
/*first we have to include our functions.php */

include "functions.php";

/*then lets call our first function*/

addingvalues(10,10);
echo "<br>";
$file = fopen('test.txt','w');
fwrite($file,"Ferenc" . "\n");
fwrite($file,"Tamás");
fclose($file);

?>