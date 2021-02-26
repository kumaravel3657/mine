<?php

$input = "WATER";

$input_length = strlen($input);
$get_half = $input_length / 2; 
$a = ($input_length % 2 == 0) ? substr($input, (floor($get_half) - 1), 2) : substr($input, $get_half, 1);
echo $a."<br>";
$words = explode($a, $input);
$final = array_reverse($words);
foreach($final as $value){
    
    $strlen = strlen( $value );
        for( $i = 0; $i < $strlen; $i++ ) {
            $a.=  $char = substr( $value, $i, 1 );
            echo $a;
            echo "<br>";
            

    }
}




?>
