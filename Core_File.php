<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Core PHP</title>
</head>
<body>
    <div class="container">
        <h1>This <span style="color:red;">is</span> my core php file</h1>
        <?php
            echo "<h1>Text print by using core php</h1>";
        
        
            // single line comment
        
        
            /* multiple line comment
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium aliquid temporibus quos impedit! Minus a reprehenderit ab ut! Quo, voluptate! */
        

        //variables in php    
        $variable1 = 5;     
        $variable2 = 2;
        
        echo $variable1 + $variable2;
        echo "<br>";
        echo "<br>";

        echo "Value of variable1 is 5";
        echo "<br>";
        echo "Value of variable2 is 2";
        echo "<br>";
        echo "<br>";

        // Operators in php ↓

        // Arithmetic Operators
        echo "<h1>Arithmetic Operators</h1>";
        echo "<br>";
        echo "The value of variable1 + variable2 is =";
        echo $variable1 + $variable2;
        echo "<br>";
        echo "<br>";
        
        echo "The value of variable1 - variable2 is =";
        echo $variable1 - $variable2;
        echo "<br>";
        echo "<br>";
        
        echo "The value of variable1 * variable2 is =";
        echo $variable1 * $variable2;
        echo "<br>";
        echo "<br>";

        echo "The value of variable1 / variable2 is =";
        echo $variable1 / $variable2;
        // Assignment Operators
        echo "<h1>Assignment Operators</h1>";
        echo "<br>";
        $newvar = $variable1;
        // $newvar += 1;
        // $newvar += 1;
        // $newvar += 1;
        $newvar /= 2;


        echo "<br>";
        echo "<br>";
        echo "The value of newvar is =";
        echo $newvar;

        // Comparison Operators

        echo "<h1>Comparison Operators</h1>";
        echo "<br>";

        echo "<br>";
        echo "Mostly use if and else statments";
        echo "<br>";
        echo "<br>";

        echo "the value of 1==10";
        echo var_dump(1==10);
        echo "<br>";
        echo "<br>";
        
        echo "the value of 1!=10";
        echo var_dump(1==10);
        echo "<br>";
        echo "<br>";

        echo "the value of 1>=10";
        echo var_dump(1>=10);
        echo "<br>";
        echo "<br>";

        echo "the value of 1<=10";
        echo var_dump(1<=10);
        echo "<br>";
        echo "<br>";
        // Increment / Decrement Operators
        
        echo "<h1>Increment / Decrement Operators</h1>";
        echo "<br>";


        // echo $variable1++;
        // echo $variable1--;
        // echo ++$variable1;
        // echo --$variable1;


        echo "<br>";
        echo $variable1;



        // Logical Operators
        echo "<br>";
        echo "<h1>Logical Operators</h1>";
        echo "<br>";

        // AND (&&)
        // OR (||)
        // xor
        // not (!!)

        // $newlogic = (true and false); //false
        // $newlogic = (true and true);  //true
        // $newlogic = (false and false); //false
        // $newlogic = (false and true); //false
        
        
        // $newlogic = (false or true); //true
        // $newlogic = (false or false); //false
        // $newlogic = (true or true); //true
        // $newlogic = (true or false); //true


        // $newlogic = (false xor true); //true
        // $newlogic = (false xor false); //false
        // $newlogic = (true xor true);] //false
        $newlogic = (true xor false); //true



        echo "<br>";
        echo "the logic of newlogic variable is = ";
        echo var_dump($newlogic);


        //Data types in php

        echo "<br>";
        echo "<h1>Data type in php</h1>";
        echo "<br>";

        $datavar = "this is data of =";
        echo var_dump($datavar);
        echo "<br>";

        $datavar = 20;
        echo var_dump($datavar);
        echo "<br>";

        $datavar = 10.90;
        echo var_dump($datavar);
        echo "<br>";

        $datavar = array(2,"wali");
        echo var_dump($datavar);
        echo "<br>";

        echo "<br>";
        echo "<h1>Constant in php</h1>";
        echo "<br>";

        define('varname',"wali"); // constant variable in php using define we can create constant variable
        define('varno',20.40);


        echo varno; 
        echo "<br>";
        echo varname; 


         ?>

        

    </div>
</body>
</html>