<?php
$text = "aaaa:wwwwww:iiiiiii";

echo $pos = strpos($text, ':');
echo substr($text, 0 , $pos+1);

echo "<br>";
echo $text2 = substr($text, $pos+1);

echo "<br>";
$pos2 = strpos($text2, ':');
echo substr($text2, 0, $pos2);
