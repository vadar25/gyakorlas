<?php 
/*first we have to include our functions.php */

//include "functions.php";

/*then lets call our first function*/

// addingvalues(10,10);


// echo "<br>";

/* writing to a file 
$file = fopen('test.txt','w');
fwrite($file,"Ferenc" . "\n");
fwrite($file,"Tamas");
fclose($file);
*/


/*read the file line by line and then echo them out with foreach*/
/*
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
*/
/*appending data */
/*
$file = fopen("test.txt","a");

fwrite($file,"\n");
fwrite($file,'Juli'."\n");
fwrite($file,'Anya');

fclose($file);
*/
/*reading data from a file with comma separated variables*/
/*
$filename = "test.txt";
$file = fopen($filename,'r');

$datain = fread($file, filesize($filename));
*/
/*$names_array = explode(',',$datain);

foreach ($names_array as $name)
	{
		echo $name."<br>";
	}*/
	/*
$names_array = array('Feri','Juli','Anya');

$string = implode(', ', $names_array);

echo $string;

*/

/*listing files*/
/*opening the directory*/
/*
$directory = 'files';

if ($handle = opendir($directory.'/')){
	echo 'Looking inside '.$directory."<br>";
	
	while ($file = readdir($handle)){
		if($file!='.'&&$file!='..')
		echo '<a href="'.$directory.'/'.$file.'">'.$file."</a><br>"; 
	}
}
*/

/*checking if file exists*/

$filename = 'file.txt';

if (file_exists($filename)){
	echo 'The file is already exist.<br>';
} else {
	$handle = fopen($filename,'w');
	fwrite($handle, 'Nothing');
	fclose($handle);
	
	
}










?>