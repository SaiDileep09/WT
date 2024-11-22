<?php
//defining a string
$greeting="Hi, How are you?";

//string length
$length=strlen($greeting);
echo "Length of the string: ".$length."\n";

//no.of words
$words=str_word_count($greeting);
echo "No.of words in string: ".$words."\n";

//string reverse
$reverse=strrev($greeting);
echo "Reversed string: ".$reverse."\n";

//specific string
$string="are";
$position=strpos($greeting, $string);
if($position!==false){
  echo "Found '$string' at position $position";
}else{
  echo "'$string' not found";
}
?>