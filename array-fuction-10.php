<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array-function</title>
</head>
<body>
    <?php
    /*
     1.next() - next() function is used to move the internal pointer to the next element in an array.
     2.prev() - prev() function is used to move the internal pointer to the previous element in an array.
     3.end() - end() function is used to move the internal pointer to the last element in an array.
     6.key() - key() function is used to return the key of the current element in an array.
     3.pos() - pos() function is used to return the value of the current element in an array.
     5.current() - current() function is used to return the value of the current element in an array.
   
   
   

   */
//   $a=array("red","green","blue","yellow","brown");
  $a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
    //echo next($a)."<br>"; // greens
    //echo next($a)."<br>"; // blue

    //current() function is used to return the value of the current element in an array.
    // $a=array("red","green","blue","yellow","brown");
    $a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
    echo "<b> First Element:<b>" .current($a)."<br>";
    echo key($a)."<br>"; 
    echo pos($a)."<br>";
    echo next($a)."<br>";
    echo end($a)."<br>";
    echo "<b> Last Element:<b>" .current($a)."<br>";
 


   
    

    
    
    ?>
</body>
</html>