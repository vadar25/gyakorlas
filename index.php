<?php 
/*first we have to include our functions.php */

include "functions.php";

/*then lets call our first function*/

addingvalues(10,10);


echo "<br>";

/* writing to a file 
$file = fopen('test.txt','w');
fwrite($file,"Ferenc" . "\n");
fwrite($file,"Tamas");
fclose($file);
*/


/*read the file line by line and then echo them out with foreach*/

$readin = file("test.txt");
$readin_count = count($readin);
$count = 1;
echo "These are the names so far: ";
foreach ($readin as $names) {
	if ($count == $readin_count){
		echo $names . ".";
	} else {
		echo trim($names) . ", ";
	}
	$count++;
}
?>