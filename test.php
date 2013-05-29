<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
<?php
 /* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf(STDIN, "%s\n", $string);
$length = strlen($string);
$subs = array();
//I made this change. dofhinfnfnewrnlwernoerw
for ($i=0; $i<=$length-1; $i++) {
    for ($j=$i; $j<=$length-1; $j++) {
		$temp = substr($string,$i,$j);
		if(!(in_array($temp, $subs))) { //check to see if substring is in array
		  array_push($subs,$temp);
		}
    }
}

echo count($subs);

?>
<body>
</body>
</html>