<?php 
$a = 1;
$i = 0;

rekrusif(5);
function rekrusif($n){
	global $i;
	rekrusif2($i,$n);
	echo "<br>";
	if (--$n > $i) {
		rekrusif($n);
	}
 }

 function rekrusif2($j,$n){
 	global $i;
 	if ($j > $i - $n) {
 		echo "*";
 		rekrusif2($j - 1,$n);
 	}
 }

 echo "=============++++=================<br>";

 function Perulangan($i){
 	echo "$i";
 	if ($i < 1) {
 		$i++;
 		 Perulangan($i);
 	}
 }

function Perulangan2($j){
	echo "$j";
 	if ($j < 2) {
 		$j++;
 		Perulangan2($j);
 	}
 }

function Perulangan3($k){
	echo "$k";
 	if ($k < 3) {
 		$k++;
 		Perulangan3($k);
 	}
 }

function Perulangan4($l){
	echo "$l";
 	if ($l < 4) {
 		$l++;
 		Perulangan4($l);
 	}
 }

function Perulangan5($m){
	echo "$m";
 	if ($m < 5) {
 		$m++;
 		Perulangan5($m);
 	}
 }

echo Perulangan($a);
echo "<br>";
echo Perulangan2($a);
echo "<br>";
echo Perulangan3($a);
echo "<br>";
echo Perulangan4($a);
echo "<br>";
echo Perulangan5($a);
 
?>
