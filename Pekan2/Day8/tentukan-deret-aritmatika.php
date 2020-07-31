<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
    $hasil = "FALSE";
    $per = $arr[1] - $arr[0];
    for ($i=0; $i < count($arr) - 1; $i++) { 
        $per2 = $arr[$i+1] - $arr[$i];
        if($per2 == $per ){
            $hasil = "TRUE";
        }else{
            $hasil = "FALSE";
        }
    }
    return $hasil;
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo "<br>";
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo "<br>";
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo "<br>";
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo "<br>";
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
echo "<br>";
?>