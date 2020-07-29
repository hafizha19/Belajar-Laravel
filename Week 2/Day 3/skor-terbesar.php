<?php
function skor_terbesar($arr)
{
  $keys = [];
  $laravel = [];
  $reactNative = [];
  $reactJs = [];

  for ($i = 0; $i < count($arr); $i++) {
    array_push($keys, $arr[$i]['kelas']);
    // for($j=0; $j<count(array_unique($keys)); $j++){
    if ($arr[$i]['kelas'] == array_unique($keys)[0]) {
      array_push($laravel, $arr[$i]);
    } elseif ($arr[$i]['kelas'] == array_unique($keys)[1]) {
      array_push($reactNative, $arr[$i]);
    } else {
      array_push($reactJs, $arr[$i]);
    }

    // }
  }

  $nilaiLaravel = array_column($laravel, 'nilai');
  rsort($nilaiLaravel);
  $nilaiReactJs = array_column($reactJs, 'nilai');
  rsort($nilaiReactJs);
  $nilaiReactNative = array_column($reactNative, 'nilai');
  rsort($nilaiReactNative);
  $result = [];
  $kelas = ['Laravel', 'React Js', 'React Native'];

  for ($j = 0; $j < count($arr); $j++) {
    if ($arr[$j]['nilai'] == $nilaiLaravel[0] || $arr[$j]['nilai'] == $nilaiReactJs[0] || $arr[$j]['nilai'] == $nilaiReactNative[0]) {
      // $result = array_fill_keys($kelas, $arr[$j]);
      array_push($result, $arr[$j]);
    }
  }
  $fix = array_combine($kelas, $result);
  return $fix;
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
