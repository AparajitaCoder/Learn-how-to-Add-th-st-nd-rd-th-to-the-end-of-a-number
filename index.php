<?php 

/**
 * @version 0.1
 * @author Aparajita
 * @see
 *
 */

//function to add th, st, nd, rd, th to the end of a number
function ordinal($cdnl){ 
    $test_c = abs($cdnl) % 10; 
    $ext = ((abs($cdnl) %100 < 21 && abs($cdnl) %100 > 4) ? 'th' 
            : (($test_c < 4) ? ($test_c < 3) ? ($test_c < 2) ? ($test_c < 1) 
            ? 'th' : 'st' : 'nd' : 'rd' : 'th')); 
    return $cdnl.$ext; 
}  

//usage
for($i=1;$i<100;$i++){ 
    echo ordinal($i).'<br>'; 
} 

   
?>