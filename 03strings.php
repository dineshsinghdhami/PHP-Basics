<?php
     $str = "this is a stddring";
     echo $str;

     //to echo len string

     $len = strlen("$str");    // to check the length of string 
     echo " <br> the length of this string is " . $len . " thank you";   // here concatenate
     echo " <br> the number in this string is " . str_word_count($str); // here count the words inside string $str
     echo " <br> the reversed string is " .strrev($str) . " thank you";  // it reverse the strings
     echo " <br> the search for is in this string is " . strpos($str, "is") . " thank you";   // to check the position of the string 
      echo " <br> the replaced string is " . str_replace("is", "at", $str) . " thank you";   // to replace the string letter or word 
?>
