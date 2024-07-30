<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array-Function </title>
</head>
<body>
    <!-- 
array_pop() - Remove the last element from an array
array_push() - Insert one or more elements to the end of an array 
array_shift() - Shift an element off the beginning of array
array_unshift() - Prepend one or more elements to the beginning of an array     -->



<?php

echo "<h2>array_pop()</h2>";
$arr = array("red", "green", "blue", "yellow");
$newarr=array_pop($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";



echo "<h2>array_push()</h2>";
$arr = array("red", "green");

$newarr=array_push($arr, "blue", "yellow","pink");
echo '<pre>';
print_r($arr);
echo '</pre>';

echo 'array_shift() - Shift an element off the beginning of array';
$arr = array("red", "green", "blue", "yellow");
$newarr=array_shift($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";


echo 'array_unshift() - Prepend one or more elements to the beginning of an array';
$arr = array("red", "green", "blue", "yellow");
$newarr=array_unshift($arr, "pink","black");
echo "<pre>";
print_r($arr);
echo "</pre>";



?>
</body>
</html>