<?php

$input = "2211";

function Checkinput($input){

 $sum = 0;
 for($i = 0; $i < strlen($input); $i++)
{
    $InitNum = substr($input, $i, 1);
    if ( ($i + 1) < strlen($input) ) {
        $NextNum =  substr( $input, $i + 1, 1 );
    }else{
        $NextNum =  substr( $input, 0, 1 );
    }
 
 
     if( $InitNum == $NextNum ){
      $sum += $InitNum;
  }
}

return $sum;
}

echo Checkinput($input);
 
  ?>