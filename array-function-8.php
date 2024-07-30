<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array-function  </title>
</head>
<body>
   <?php
   /*
     1.array_column(array, column_key, index_key)//return the values from a single column in the input array
    notes:kisi bhi ek fileds ka value ko utha kr ek naya array bna ske h
    2. array_chunk(array, size, preserve_keys)//split an array into chunks
    notes: ek array ko chote chote or paire me krke array me divide kr skte h
    notes: preserve_keys: true or false
    age true h toh key preserve hogi

    3.array_flip() - Exchanges all keys with their associated values in an array
    4.array_change_key_case() - Changes all keys in an array to lowercase or uppercase
    
    5.array_fill_keys() - Fill an array with values, specifying keys
    5.array_fill() - Fill an array with values
    6.array_sum() - Calculate the sum of values in an array
    7.array_product() - Calculate the product of values in an array
    8.array_reverse() - Return an array in the reverse order
    9.array_random() - Pick one or more random keys out of an array
    10.array_shuffle() - Shuffle the elements in an array
   */


//    1.array_column(array, column_key, index_key)//return the values from a single column in the input array
$a=array(
    array(
        'id'=>1,
        'name'=>'rohit',
        'city'=>'indore'
    ),
    array(
        'id'=>2,
        'name'=>'raj',
        'city'=>'bhopal'
    ),
    array(
        'id'=>3,
        'name'=>'ram',
        'city'=>'ujjain'
    ),
    array(
        'id'=>4,
        'name'=>'ravi',
        'city'=>'mumbai'
    )
);
// $newar=array_column($a,'name');
// $newar=array_column($a,'city');// return the values from a single column in the input array
$newar=array_column($a,'city','id'); 
echo "<pre>";
print_r($newar);
echo "</pre>";

// 2. array_chunk(array, size, preserve_keys)//split an array into chunks
$b=array("red","green","blue","yellow","brown","black","pink","gray");
$b=array("red"=>1,"green"=>2,"blue"=>3,"yellow"=>4,"brown"=>5,"black"=>6,"pink"=>7,"gray"=>8);
// $newar=array_chunk($b,8);
$newar=array_chunk($b,3,true);
echo "<pre>";
print_r($newar);
echo "</pre>";

// 3.array_flip() - Exchanges all keys with their associated values in an array
   $a=array(
       'id'=>1,
       'name'=>'rohit',
       'city'=>'indore'
   );
   $a=array("ram","shayam","rohit","mohan");//enterchange key and value return new assoc array
   $arfip=array_flip($a);
    echo "<pre>";
    print_r($arfip);
    echo "</pre>";





// 4.array_change_key_case() - Changes all keys in an array to lowercase or uppercase

$a=array("NAME"=>"rohit","city"=>"indore","age"=>25);
$newar=array_change_key_case($a,CASE_UPPER);
$newar=array_change_key_case($a,CASE_LOWER);
echo "<pre>";
print_r($newar);
echo "</pre>";



// 5.array_fill_keys() - Fill an array with values, specifying keys
$a=array("red","green","blue","yellow","brown","black","pink","gray");
$newar=array_fill_keys($a,"hello");// make new array with key and value assoc
echo "<pre>";
print_r($newar);
echo "</pre>";



// 5.array_fill() - Fill an array with values
$fill=array_fill(0,5,"testing"); // return associative array with key and value
echo "<pre>";
print_r($fill);
echo "</pre>";




// 6.array_sum() - Calculate the sum of values in an array

$a=array(1,2,3,4,5,6,7,8,9,10);
$sum=array_sum($a);
echo $sum."<br>";

// 7.array_product() - Calculate the product of values in an array
$a=array(1,2,3,4);
$sum=array_product($a);
echo $sum;

// 8.array_reverse() - Return an array in the reverse order

$a=array(1,2,3,4,5,6,7,8,9,10);
$a=array("red","green","blue","yellow","brown","black","pink","gray");
$rev=array_reverse($a);
echo "<pre>";
print_r($rev);
echo "</pre>";

// 9.array_random() - Pick one or more random keys out of an array
$a=array("red","green","blue","yellow","brown","black","pink","gray");
$rand=array_rand($a,4);
echo "<pre>";
print_r($rand);
echo "</pre>";
echo "<br>";
// 10.array_shuffle() - Shuffle the elements in an array
$a=array("red3","green","blue","yellow","brown","black","pink","gray");
shuffle($a);
echo "<pre>";
print_r($a);
echo "</pre>";


   ?> 
</body>
</html>