<?php
$example0 = file_get_contents('example.txt');
echo nl2br($example0);
$example1 = file("example.txt");
echo $example1 [0];
?>
