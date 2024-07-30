<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array-function </title>
</head>
<body>
    <?php
    /*  
    1.array_walk() - array_walk() function is used to modify the elements of an array.(index ,assoc)

    2.array_walk_recursive() - array_walk_recursive() function is used to modify the elements of an array recursively.(mutl assoc array)
    */
    
    // 1.array_walk() - array_walk() function is used to modify the elements of an array.(index ,assoc)
    function myfunction($value,$key,$param)
    {
        // echo "The <b>key</b> $key has the <b>value</b>:- $value<br>";   
        echo "The $key $param has the <b>value</b>:- $value<br>";   
    }
    //   $colors = array("red","green","blue","yellow");
      //associative array
      $colors = array("dddf"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    //   array_walk($colors,"myfunction");
      array_walk($colors,"myfunction","is a key of new");


    // 2.array_walk_recursive() - array_walk_recursive() function is used to modify the elements of an array recursively.(mutl assoc array)
    

    $colors=array("a"=>"red","b"=>"green","c"=>array("d"=>"blue","e"=>"yellow"),
    $inar=array("f"=>"gray","g"=>"pink"));

    array_walk_recursive($colors,"myfunction3","is Key OF ");

    function myfunction3($value,$key,$param)
    {
        // echo "The <b>key</b> $key has the <b>value</b>:- $value<br>";  
        echo "The $key $param has the <b>value</b>:- $value<br>";   
    }
    ?>
</body>
</html>