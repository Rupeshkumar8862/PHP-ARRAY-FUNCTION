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
1.array_replace() 
          -Replaces elements from passed arrays into the first array  use for only index array and associative array
2.array_replace_recursive() 
       - Replaces elements from passed arrays into the first array recursively  use for multidimensional assoc array -->

*/
// array_replace()
// $color=array("pink","red","green","blue","yellow");
$color=array("a"=>"pink","b"=>"red","c"=>"green","d"=>"blue","e"=>"yellow");
// $color1=array("black","white" ,"chan");
$color1=array("a"=>"black","b"=>"white" ,"c"=>"chan");
$newarr=array_replace($color,$color1);
echo "<pre>";
print_r($newarr);
echo "</pre>";


// 2.array_replace_recursive() 

    $arrmulti=array("a"=>array("red","green","blue"),"b"=>array("black","white","yellow"));
    $arrmulti1=array("a"=>array("pink55","orange77","yellow"),"b"=>array("black","white","yellow"));
   $newarr= array_replace_recursive($arrmulti,$arrmulti1);
    echo "<pre>";

    print_r($newarr);
    echo "</pre>";





    ?>



</body>
</html>