<?php
function ubah_huruf($string){
    $result = [];
    $abjad = range('a', 'z');
    $arrString = str_split($string);
    for($i=0; $i<count($arrString); $i++){
        for($j=0; $j<count($abjad); $j++){
            if ($arrString[$i]==$abjad[$j]) {
                array_push($result, $abjad[$j+1]);
            }
        }
    }
    return implode($result) . "<br>";
}

// // TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>