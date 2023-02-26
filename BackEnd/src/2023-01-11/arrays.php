<?php

// Sukurkite dvimatį masyvą. Pirmieji du raktai yra lt ir en.

// Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai.

// Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.

// Sukurkite kintamuosius lang (reikšmės lt arba en) ir parodykite dieną

$arr = [

    'lt' => [
        'Sekmadienis',
        'Pirmadienis',
        'Antradienis',
        'Trečiadienis',
        'Ketvirtadienis',
        'Penktadienis',
        'Šeštadienis',

    ],
    'en' => [
        'Sunday',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',

    ]
];

echo $arr['lt'][1];
'<br>';

echo $arr['en'][2];


$lang = 'lt';

echo $arr[$lang][date('N')];