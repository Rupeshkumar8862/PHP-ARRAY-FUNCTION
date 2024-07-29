<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ARRAY_KEY FUNCTION</title>
</head>
<body>
    
<!-- 
1.array_keys() - Return all the keys of an array // use for associative array
2.array_key_first() - Gets the first key of an array // use for associative array (PHP 7.3)
3.array_key_last() - Gets the last key of an array  // use for associative array  (PHP 7.3)
4.array_key_exists() - Checks if the specified key exists in the array
key_exits()  -->
<?php

$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_keys($a); // return all the keys of an array  // use for associative array   

echo '<pre>';
print_r($result);
echo '</pre>';

// $b=array("red","green","blue","yellow");
$b=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"); // use for associative array
$result=array_key_first($b); // return the first key of an array  // use for associative array
//$result=array_key_last($b); // return the last key of an array  // use for associative array
echo '<pre>';
print_r($result);
echo '</pre>';


$color = array("a"=>"red", "b"=>"green", "c"=>"blue");
//$newarray=array_key_exists('a',$color);// check if the specified key exists in the array
// echo '<pre>';
// print_r($newarray);
// echo '</pre>';

if (array_key_exists("d", $color)) //    check if the specified key exists in the array
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }


?>
</body>
</html>