<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array-function</title>
</head>
<body>
<!-- 
1.count() - Count all elements in an array, or something in an object
2.Sizeof() - Alias of count()
3.in_array() - Checks if a value exists in an array
//string function
1.expload() - Split a string by a string
2.impload() - Join array elements with a string
  -->

  <?php
//   1.count() 

$color=array("pink","red","green","blue","yellow","black","white"," loop");
// echo count($color)."<br>";
 for($i=0;$i<count($color);$i++){
     echo $color[$i]."<br>";
 }
// assoc
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
echo count($age)."<br>";

//multi-dimentional array
$car=array(
    array("volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  
);
echo count($car,1)."<br>";

// 3.in_array() - Checks if a value exists in an array

$people=array("Peter","Joe","Ben","Harry");
$newarr=in_array("Benr",$people);
if($newarr){
    echo "Ben is in the array";
}else{
    echo "Ben is not in the array";
}

//string function
// 1.expload() - string to array
// 2.impload() - array to string

$a="Hello world. It's a beautiful day.54";
$b=explode(" ",$a);
echo "<pre>";
print_r($b);
echo '</pre>';

$c=array("Hello","world","It's","a","beautiful","day.",98);
$d=implode(" ",$c);
echo $d;








  ?>
</body>
</html>