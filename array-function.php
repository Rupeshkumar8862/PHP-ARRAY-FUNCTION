<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php array function</title>
</head>
<body>
<!-- 
1.array_slice() - Extract a slice of the array
synatx: array_slice(array, start, length)


2.array_splice() - Remove a portion of the array and replace it with something else
synatx: array_splice(array, start, length, array-2)

3.array_sum() - Calculate the sum of values in an array
4.array_rand() - Pick one or more random keys out of an array  -->


<?php 
$arr=array("red","green","blue","yellow","black");
// $arr=array("name`"=>"Rahul","age"=>"25","city"=>"Delhi","country"=>"India","phone"=>"1234567890","email"=>"admin@gmsail.com");
//$newarr=array_slice($arr,2,4); // start from 2 and length is 4
//$newarr=array_slice($arr,2,-1); // start from 2 and length from last  -1
$newarr=array_slice($arr,2,3);
echo "<pre>";
print_r($newarr);
echo "</pre>";
// 2.array_splice() - Remove a portion of the array and replace it with something else
// synatx: array_splice(array, start, length, array-2)


$color=array("red","green","blue","yellow","black");
$fruit=array("apple","banana","mango","grapes","orange");
//array_splice($color,1); // remove all element from 1
//array_splice($color,-1); // remove last element leave only and print all element
//array_splice($color,2,2); // remove 2 element from 2nd index
array_splice($color,2,2,$fruit);
echo "<pre>";
print_r($color);
echo "</pre>";


// 3.array_sum() - Calculate the sum of values in an array
$number=array(10,20,30,40,50);
echo array_sum($number);
// 4.array_rand() - Pick one or more random keys out of an array
$color=array("red","green","blue","yellow","black");
$random_keys=array_rand($color,3);
echo "<pre>";
print_r($random_keys);
echo "</pre>";



?>
</body>
</html>