<?php
/*
函数的概念
*/

/*
for($i=0; $i<4; $i++){
	for($j=0; $j<10; $j++){
		echo "※";
	}
	echo "<br>";
}
echo "<hr>";

for($i=0; $i<4; $i++){
	for($j=0; $j<10; $j++){
		echo "※";
	}
	echo "<br>";
}
echo "<hr>";

for($i=0; $i<4; $i++){
	for($j=0; $j<10; $j++){
		echo "※";
	}
	echo "<br>";
}
echo "<hr>";
*/

function printStar(){
	for($i=0; $i<3; $i++){
		for($j=0; $j<10; $j++){
			echo "※";
		}
		echo "<br>";
	}
	echo "<hr>";
}

printStar();
printStar();
printStar();
