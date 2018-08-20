<?php
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
];

$toyota = [
    'model' => 'Camry',
    'speed' => 240,
    'doors' => 5,
    'year' => '2014'
];

$opel = [
    'model' => 'Astra',
    'speed' => 220,
    'doors' => 3,
    'year' => '2013'
];

// для версий php ниже 5.4
/*$car = array(
    'bmw' => array(
        'model' => 'X5',
        'speed' => 120,
        'doors' => 5,
        'year' => '2015'
    ),

    'toyota' => array(
        'model' => 'Camry',
        'speed' => 240,
        'doors' => 5,
        'year' => '2014'
    ),

    'opel' => array(
        'model' => 'Astra',
        'speed' => 220,
        'doors' => 3,
        'year' => '2013'
    ),
);*/

$car = [
    'bmw' => [
        'model' => 'X5',
        'speed' => 120,
        'doors' => 5,
        'year' => '2015'
    ],

    'toyota' => [
        'model' => 'Camry',
        'speed' => 240,
        'doors' => 5,
        'year' => '2014'
    ],

    'opel' => [
        'model' => 'Astra',
        'speed' => 220,
        'doors' => 3,
        'year' => '2013'
    ]
];
//print_r ($car2['bmw']['model']);

foreach ($car2 as $brend => $items) {
    echo "CAR $brend <br>";
    foreach ($items as $item) {
        echo " $item";
    }
    echo "<br>";
}
