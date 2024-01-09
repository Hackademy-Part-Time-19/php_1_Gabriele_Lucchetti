<?php

$integer= 1;

$float = 1.5;

$string="la macchina non parte!";

$boolean= true;

var_dump($integer);
var_dump($float);
var_dump($string);
var_dump($boolean);

$text1 = "Marco ";
$text2 = "hai";
$text3 = "sete";
$text4 = "? \n";
$text5 = "Perchè";
$text6 = $text2;
$text7 = 'bevuto';
$text8 = "tutto \n";


echo $text1 . " " . $text2 . " " . $text3 . $text4 . $text5 . " " . $text6 . " " . $text7 . " " . $text8;


$words1 = [ 
    'una', 
    67, 
    'vita', 
    'colle',
    'mi', 
    'rosso', 
    [ 
      'oscura', 
      'era', 
      89, 
      [ 
        'mezzo',
        [ 
          'cammin', 
          'Nel', 
          [ 
            'selva', 
            'la', 
            [ 
              'via', 
              'una', 
              true, 
            ] 
          ], 
        ] 
      ], 
    'ritrovai', 
    'per' 
    ], 
    'diritta' 
  ]; 
  $words2 = [ 
    'elemento1' => 25.89, 
    'elemento2' => 'nostra', 
    'elemento3' => [ 
                      'Virgilio', 
                      "smarrita\n", 
                      'ché' 
                    ] 
  ];


  $words3 = [
    'del',
    'di',
    ",",

  ];

$result = $words1[6][3][1][1] . " " . $words1[6][3][0] . " " . $words3[1] . " " . $words1[6][3][1][0] .
 " " . $words3 [1] . " " . $words2['elemento2'] . " " . $words1[2] . " " . $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " " .
  $words1[6][3][1][2][2][1] . " " . $words1[6][3][1][2][0] . " " . $words1[6][0] 
  . $words3[2] . " " . $words2['elemento3'][2] . " " . $words1[6][3][1][2][1] 
  . " " . $words1[7] . " " . $words1[6][3][1][2][2][0] . " "  . $words1[6][1] . " " . $words2['elemento3'][1];

echo $result;


$x = 50;
$y = 20;
$z = "10";
$w= 30;

var_dump($x<$y);
var_dump($x<=$w);
var_dump($y==$z);
var_dump($y===$z);
var_dump($y!==$z);
var_dump($y!=$z);

