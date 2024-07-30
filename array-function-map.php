<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Function</title>
</head>
<body>
    <?php 
    /* 
    1.array_map() - array_map() function is used to modify the elements of an array.
    2.array_reduce() - array_reduce() function is used to reduce the array to a single value.
    3.array_filter() - array_filter() function is used to filter the elements of an array using a user-defined function.
    
    */
    


    // 1.array_map() - array_map() function is used to modify the elements of an array.
    function squere($value)
    {
        return ($value * $value);
    }

    $numbers = [1, 2, 3, 4, 5];
    // $newarr=array_map("squere", $numbers);
    $newarr=array_map("squere", $numbers);
    echo "<pre>";
    print_r($newarr);
    echo "</pre>";
  
// 
function squere2($n,$m)
{
    return ("$n for $m");
}

$array = array(1, 2, 3, 4, 5);
$b=array("one", "two", "three", "four", "five");
$nearr=array_map("squere2",$array,$b);
echo "<pre>";
print_r($nearr);
echo "</pre>";

function multi($n,$m)
{
    return [$n => $m]; // return associative array
}

$array = array(1, 2, 3, 4, 5);
$b=array("one", "two", "three", "four", "five");
// $nearr=array_map("multi",$array,$b);
$nearr=array_map(null,$array,$b);// rturn associative array
echo "<pre>";
print_r($nearr);
echo "</pre>";


    // 2.array_reduce() - array_reduce() function is used to reduce the array to a single value.

    function sum($carry, $item)
    {

        return $carry." , ".$item;// retirn string
    }
    $array=array("ram","shyam","hari","gita");
    $newarr=array_reduce($array, "sum");
    echo "<pre>";
    print_r($newarr);

    echo "</pre>";



    // 3.array_filter() - array_filter() function is used to filter the elements of an array using a user-defined function.
    function fucntion4($value)
    {
        return $value=="ram"|$value=='world';// return only ram and world in array
    }

    $array = array("ram", "hello", "karna", "world", "hello");
    $nearr=array_filter($array, "fucntion4");
    echo "<pre>";
    print_r($nearr);
    echo "</pre>";

    
    ?>
</body>
</html>