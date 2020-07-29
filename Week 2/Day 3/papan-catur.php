<?php

function papan_catur($angka)
{
    $catur = "";
    for ($i = 0; $i < $angka; $i++) {
        if ($i%2 == 0 ) {
            $catur .= "".str_repeat("# ", $angka) ."\n";
        } else {
            $catur .= str_repeat(" #", $angka-1)."\n";
        }
    }
    return $catur;
}


// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/