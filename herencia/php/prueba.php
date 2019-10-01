 <?php
$cars = array("Volvo", "BMW", "Toyota","SuperLoco");
$arrlength = count($cars);
//echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
for ($x = 0; $x <= $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
} 
?> 