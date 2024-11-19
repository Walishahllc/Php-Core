<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Core Php Mini Project</title>
</head>
<style>
*{
    margin:0;
    padding:0;
    box-sizing: border-box; 
}
.container{
    width: 80%;
    background-color:lightblue;
    padding:20px;
    margin:auto;
    color:red;
}

</style>
<body>
    
<div class="container">
<h1>Php Core</h1>
<br>
<h3>Your party status is here:</h3>
<?php

$age=30;
if($age>40){
    echo "You can go to the party";
}
elseif($age==30){
    echo "yes you can go to the party";
}
else{
    echo "you can not go to the party because you are underage";
}


echo "<h1>Arrays in php</h1>";

$languages = array("php","Ajax","Codignator","Laravel");
// echo $languages[3]; //print laravel because php array indexing start from 0 so 0 value measn php
// echo count($languages); //they count total no of arrays value and in this case value in 4 

//loops in php
$a = 0;
// while($a <= 10){
//     echo "<br>this is the value of = ";
//     echo $a;
//     $a++;
// }

//iterating arrays in php using while loop

while($a < count($languages)){
    echo "<br>this is the value of language = ";
    echo $languages[$a];
    $a++;
}

//For loops in php

for ($w=0; $w < 10 ; $w++) { 
    echo "<br>the value is come from using for loop ";
    echo $w;
}

foreach ($languages as $values){
    echo "<br>";
    echo "Value print using foreach loop ";
    // echo "<br>";
    echo $values;
}

        echo "<br>";
        echo "<h1>Functions in php</h1>";
        echo "<br>";

        function firstfun(){
            echo "<br>print simplest funtion in php Wali Shah";
        }

        firstfun(); //funtions print like this 
        firstfun(); //also print same functions in multiple times


       function print_number($number){          //custom funtions 
        echo "<br> print using custom funtion ";
        echo $number;
       }

       print_number(" wali shsh");
       print_number(20);
       





?>

</div>

</body>
</html>