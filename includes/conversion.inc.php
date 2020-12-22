<?php

function tempConvert($valueConvert, $convertType)
{
   if($convertType == "fahrenheit"){
       $conversion = ((9/5) * $valueConvert) + (32);
   }
    else if ($convertType == "celsius"){
       $conversion = ($valueConvert - 32) * (5/9);
   }
   return $conversion;
}

$valueConvert = $_POST['valueConvert'];
$convertType = $_POST['convertType'];
$conversion = tempConvert($valueConvert, $convertType);
echo "The initial temperature was $valueConvert. The new temperature is $conversion.";

?>

