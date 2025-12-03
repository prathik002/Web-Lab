<?php
$students = array("Prathik", "Shanu" , "Anjel" , "Nandana" , "Yaseen" , "Thasni" , "Theja" , "Safwan" , "Albin" , "Arya");
echo"<h2>Array before sorting:</h2>";
print_r($students);

echo"<br><br>";

asort($students);
echo"<h2>Array after ascending sort(asort):</h2>";
print_r($students);

echo"<br><br>";

arsort($students);
echo"<h2>Array after descending sort(arsort):</h2>";
print_r($students);
