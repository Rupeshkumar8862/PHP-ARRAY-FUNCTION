<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arry-functions</title>
</head>
<body>
    <?php 
/* 8.list() - list() function is used to assign values to a list of variables in one operation.
//assigns values to a list of variables in one operation.
work index associative array (numbered array)
syntax: list(var1, var2, var3...)

2.extract() function is used to import variables into the local symbol table from an array.
extract() function checks each key to see whether it has a valid variable name.
It also checks for collisions with existing variables in the symbol table.
syntax: extract(array, extract_rules, prefix)

3.compact() function is used to create an array from variables and their values.
syntax: compact(var1, var2, var3...)

The array keys are the variable names and the array values are the variable values.

4.range() function is used to create an array containing a range of elements.
syntax: range(start, end, step)

*/



//list() function
// $my_array = array("Dog","Cat","Horse","Bird");
$my_array=array("0"=>"Dog","1"=>"Cat","2"=>"Horse","3"=>"Bird","4"=>"Elephant");
list($a, $b, $c,$d,$e) = $my_array;
// echo "I have several animals, a $a, a $b, a $c and a $d.<br>";
echo 'Dog: '.$a.'<br>';
echo 'Cat: '.$b.'<br>';
echo 'Horse: '.$c.'<br>';
echo 'Bird: '.$d.'<br>';
echo 'Bird: '.$e.'<br>';

// 2.extract() function is used to import variables into the local symbol table from an array.
$my_array = array("Dog"=>"Tommy","Cat"=>"Kitty","Horse"=>"Horse","Bird"=>"Parrot");
extract($my_array);
echo "Dog: $Dog<br>";
echo "Cat: $Cat<br>";
echo "Horse: $Horse<br>";
echo "Bird: $Bird<br>";

// 3.compact() function is used to create an array from variables and their values.
// syntax: compact(var1, var2, var3...)
// The array keys are the variable names and the array values are the variable values.
echo 'compact() function<br>';
$firstname = "Peter";
$lastname = "Griffin";
$age = "41";
$location = "Quahog";
$desination = "Manager";
$gender="male";
$village="Kakamega";
$extra=["gender","village"];

$result = compact("firstname", "lastname", "age", "location","desination",$extra);
echo '<pre>';
print_r($result);
echo '</pre>';


// 4.range() function is used to create an array containing a range of elements.
// syntax: range(start, end, step)
echo 'range() function<br>';
// $number = range(1,5);
// $number = range(1,100,10);
// $number = range("a","g");
// $number = range("g","a");
// echo '<pre>';
// print_r($number);
// echo '</pre>';
//loop
// foreach($number as $value){
//     echo $value.'<br>';
// }
// foreach(range(1,5) as $value){
//     echo $value.'<br>';
// }
foreach(range("a","z") as $value){
    echo $value.'<br>';
}

?>
</body>

</html>