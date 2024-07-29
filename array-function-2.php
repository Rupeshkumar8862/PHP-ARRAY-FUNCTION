<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array-function merge combine aray merge_recursive</title>
</head>
<body>
    
<!-- 
1.array_merge() - Merge one or more arrays into one array use for index-array and associative array
2.array_combine() - Creates an array by using one array for keys and another for its values use index array
3.array_merge_recursive() - Merge two or more arrays into one recursively use multi-dimensional and assoc and ye comman key wale ko alg se array bna dega   -->


<?php 

echo "<h2>array_merge()</h2>";
// $color=array("red","green","blue");
// $color1=array("yellow","pink","black");
// associative array retun with key and value
$color=array("a"=>"red","b"=>"green","c"=>"blue");
$color1=array("d"=>"yellow","e"=>"pink","f"=>"black");
 $newarr= array_merge($color,$color1);
    echo "<pre>";
    print_r($newarr);
    echo "</pre>";

    // 2.array_combine() - Creates an array by using one array for keys and another for its values use index array
echo "<h2>array_combine()</h2>";
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$newarr=array_combine($fname,$age);
echo "<pre>";
print_r($newarr);
echo "</pre>";


// 3.array_merge_recursive() - Merge two or more arrays into one recursively use 

echo "<h2>array_merge_recursive()</h2>";
$color=array("a"=>"red","b"=>"green","c"=>"blue");
$color1=array("a"=>"yellow","b"=>"pink","f"=>"black");
$newarr=array_merge_recursive($color,$color1);
echo "<pre>";
print_r($newarr);
echo "</pre>";
?>



</body>
</html>