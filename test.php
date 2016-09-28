<?php

//Check Out Sleep
$seconds = 3;
while ($seconds > 0) {
    echo $seconds . " ";
    sleep(1);
    $seconds = $seconds - 1;
}

//Punctuation Stripper
$whatToStrip = array("?","!",",",";");
$test = "Hi! Am I here?";
echo $test."\n\n";
echo str_replace($whatToStrip, "", $test);


//Ping Pong Using Range
foreach(range(1, 100) as $number) {
    if ($number % 3 != 0 && $number % 5 != 0) {
        echo $number . '<br>';
        continue;
    }
    if ($number % 3 == 0) echo 'Ping';
    if ($number % 5 == 0) echo 'Pong';
    echo '<br>';
}



?>
