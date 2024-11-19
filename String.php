<?php
    $str = "walishah"; // simple string or string varibale name kuch bhi rakh sakty hein 
    echo $str;
    $len= strlen($str);
    // echo "this is string lenght using lenght in build funtion ";
    // echo "this is string lenght using lenght in build funtion ". str_word_count($str);
    // echo "this is string lenght using lenght in build funtion ". strrev($str);
    echo "this is string lenght using lenght in build funtion ". str_replace("is","at" ,$str);
    // echo strpos($str,"is"). "Thank you <br>"; //strpos use to know string position 
    // echo "this is string lenght using lenght in build funtion ". $len ."Dot use for concatenation two or more strings";
    echo $len;
?>