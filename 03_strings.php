<?php 
    $str="Live on time, emit no evil";
    echo $str;
    echo "<br>";
    $len=strlen($str);
    echo "The length of it is ".$len." characters<br>";  
    echo "The no of words in it are ".str_word_count($str)."<br>";  
    echo "The rev string is : ".strrev($str)." <br>";  
    // search a word (if not found no return)
    echo "The position of the word in string is : ".strpos($str,"on")." <br>";  
    // replace
    echo "The replaced string is : ".str_replace("on","no",$str)." <br>";  
    // echo $len;
?>