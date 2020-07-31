<?php
function skor_terbesar($arr){
  $hasil = [];
  $nilai = 0;
  for ($i=0; $i < count($arr)-1; $i++) { 
    if( in_array($arr[$i]['kelas'], $hasil) ){
      $hasil[] = $arr[$i]['kelas'];
      if ($nilai < $arr[$i]['nilai']) {
        $hasil['kelas'] =  $arr[$i]; 
        $nilai = $arr[$i]['nilai'];
      }else {
        $hasil['kelas'] =  $arr[$i]; 
        $nilai = $arr[$i]['nilai'];
      }

    }else if ( !in_array($arr[$i]['kelas'], $hasil) ){
      $hasil[] = $arr[$i]['kelas'];
      if ($nilai < $arr[$i]['nilai']) {
        $hasil['kelas'] =  $arr[$i]; 
        $nilai = $arr[$i]['nilai'];
      }else{
        $hasil['kelas'] =  $arr[$i]; 
        $nilai = $arr[$i]['nilai'];
      }
    }
  }
  return $hasil;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>