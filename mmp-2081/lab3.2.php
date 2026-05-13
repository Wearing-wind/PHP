<?php
$str="Waibhav Mehta";
//String length
echo "Length:".strlen($str). "<br>";
//Word Count
echo "Words:".str_word_count($str)."<br>";
//Reverse string
echo "Reversed:".strrev($str)."<br>";
//Replace word
echo "Replaced:".str_replace("World","PHP",$str)."<br>";
 ?>
