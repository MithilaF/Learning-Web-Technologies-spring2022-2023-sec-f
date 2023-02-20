<?php


echo "Shape 1: <br>";
for($i = 1; $i <= 3; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";

echo "Shape 2: <br>";
for($i = 3; $i >= 1; $i--) {
    for($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}

echo "<br>";

echo "Shape 3: <br>";

$count = ord('A'); // ASCII value of 'A'

for($i = 1; $i <= 3; $i++) {
    for($j = 1; $j <= $i; $j++) {
        // Printing letter and incrementing count
        echo chr($count) . " ";
        $count++;
		
    }
	echo "<br>";
   
}

?>