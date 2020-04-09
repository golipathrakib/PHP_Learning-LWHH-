<?php
$name = "Bangladesh";
$age = 55;
$word = "age";
$question = "How are you?";

echo $word ."<br/><br/> ";
echo $$word ."<br/><br/>";
echo $word ."<br/><br/>".$$word."<br/>";
echo "Hello ".$name."<br/>";
echo 'Hello $name' ."<br/>";
echo "Hello $name .$question" ."<br/>";
echo"Hello {$name}, {$question}";
    