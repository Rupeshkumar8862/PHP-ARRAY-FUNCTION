<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP INTERSECT-FUNCTION 11</title> 

</head>
<body>
    
    <?php
    /* 
    
    /* array intersect -Function 
=>(findout the common key of an array) 
1.array_intersect() - Compare arrays, and returns the matches
2.array_intersect_key() - Compare the keys of two arrays, and return the matches

3.array_intersect_assoc() - Compare the keys and values of two arrays, and return the matches

3.array_intersect_uassoc() or array_uintersect_assoc() 
- Compare the keys and values of two arrays, and return the matches (using a user-defined comparison function)

4.array_intersect_ukey() 
-Compare the keys of two arrays, and return the matches (using a user-defined comparison function)

5.array_uintersect() 
-Compare arrays, and returns the matches (using a user-defined comparison function)

6.array_uintersect_uassoc() 
- Compare the keys and values of two arrays, and return the matches (using two user-defined comparison functions)

    
    */

        // $array1 = array("a" => "green", "red", "blue");
        // $array2 = array("b" => "green", "yellow", "red");
        //assoc aaray
        // $array1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        //  $array2=array("e"=>"red","f"=>"green","g"=>"blure");
        // index array
        //  $array1=array("red","green","blue");
        //  $array2=array("red","green","yellow");
         
        // $result = array_intersect($array1, $array2);
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';

        // array_intersect_key() - Compare the keys of two arrays, and return the matches


        // $array1=array("a"=>"red","b"=>"green","g"=>"blue","d"=>"yellow");
        //  $array2=array("a"=>"red","f"=>"green","g"=>"blure");
    
        // $result = array_intersect_key($array1, $array2);
        // $result = array_intersect_assoc($array1, $array2);
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';

// 3.array_intersect_uassoc() or array_uintersect_assoc() 
// - Compare the keys and values of two arrays, and return the matches (using a user-defined comparison function)
function compare_func($a,$b){
    if($a===$b){
        return 0; // match 
    }
    return ($a>$b)?1:-1; // ternary operator condition ? true : false
}
function compare_func2($a,$b){
    if($a===$b){
        return 0; // match 
    }
    return ($a>$b)?1:-1; // ternary operator condition ? true : false
}

$array1=array("a"=>"red","b"=>"green","g"=>"blue","d"=>"yellow");
$array2=array("a"=>"red","f"=>"green","g"=>"blure");
// $result = array_intersect_uassoc($array1, $array2,"compare_func");
// $result = array_intersect_ukey($array1, $array2,"compare_func");
$result = array_uintersect_uassoc($array1, $array2,"compare_func" ,"compare_func2");
echo '<pre>';
print_r($result);
echo '</pre>';

    ?>

</body>
</html>