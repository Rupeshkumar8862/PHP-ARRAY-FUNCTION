<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arry-Sorting-function</title>
</head>
<body>


<?php 

/*
1.sort() - sort() function is used to sort an indexed array in ascending order.
2.rsort() - rsort() function is used to sort an indexed array in descending order.
3.asort() - asort() function is used to sort an associative array in ascending order, according to the value.
4.arsort() - arsort() function is used to sort an associative array in descending order, according to the value.
5.ksort() - ksort() function is used to sort an associative array in ascending order, according to the key.
6.krsort() - krsort() function is used to sort an associative array in descending order, according to the key.
7.natsort() - natsort() function is used to sort an indexed array in natural order.
8.natcasesort() - natcasesort() function is used to sort an indexed array in natural order, case-insensitive.
9.array_multisort() - array_multisort() function is used to sort multiple or multi-dimensional arrays.
10. array_reverse() - array_reverse() function is used to reverse the order of the elements in an array.

*/
// 1.sort() - sort() function is used to sort an indexed array in ascending order.
// 2.rsort() - rsort() function is used to sort an indexed array in descending order.

$arr = array(80, 60, 50, 40, 8, 74);
// $arr=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
// sort($arr);
rsort($arr);
echo '<pre>';
print_r($arr);
echo'</pre>';

// 3.asort() - asort() function is used to sort an associative array in ascending order, according to the value.
// 4.arsort() - arsort() function is used to sort an associative array in descending order, according to the value.
$arr=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
//asort($arr); // assending order
arsort($arr); // dec order
echo '<pre>';
print_r($arr);
echo'</pre>';

// 5.ksort() - ksort() function is used to sort an associative array in ascending order, according to the key.
// 6.krsort() - krsort() function is used to sort an associative array in descending order, according to the key.

$arr=array("z"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
//ksort($arr); // assending order
 krsort($arr); // dec order
echo '<pre>';
print_r($arr);
echo'</pre>';
















// 7.natsort() - natsort() function is used to sort an indexed array in natural order.
// 8.natcasesort() - natcasesort() function is used to sort an indexed array in natural order, case-insensitive.
$arr = array("img12.png", "img10.png", "img2.png", "img1.png");
natsort($arr);
natcasesort($arr);

echo '<pre>';
print_r($arr);
echo'</pre>';













// 9.array_multisort() - function is used to sort multiple or multi-dimensional arrays.
// 10. array_reverse() - array_reverse() function is used to reverse the order of the elements in an array.



$arr1=array(array("a","b","c","d"),array("e","f","g","h"),array("i","j","k","l"));
array_multisort($arr);
echo '<pre>';
print_r($arr1);
// print_r($arr1);
echo'</pre>';



?>




    
</body>
</html>