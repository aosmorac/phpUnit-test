<?php

final class Codility
{
    
    public function BinaryGap($N)
    {
        //$n = decbin($N) . ""; // If it is a decimal
        $n = $N . "";
        $maxGap = 0;
        $subString = $n;

        while ( strlen($subString) > 1 ) {
            if ( $maxGap > strlen($subString) ) {
                break;
            }
            $pos = strpos($subString, '1');
            $subString = substr($subString,$pos+1,strlen($subString)-1);
            $pos = strpos($subString, '1');
            if ($pos > $maxGap) {
                $maxGap = $pos;
            }
        }
        return $maxGap;
    }

}
