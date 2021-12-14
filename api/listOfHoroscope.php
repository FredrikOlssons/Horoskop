<?php

$horoscopeList = [
    [
        'name' => 'Väduren',
        'start' => ["month" => 3,"day" => 21],
        'end' => ["month" => 4,"day" => 20]
    ],
    [
        'name' => 'Oxen',
        'start' => ["month" => 4,"day" => 21],
        'end' => ["month" => 5,"day" => 21],
    ],
    [
        'name' => 'Tvillingarna',
        'start' => ["month" => 5,"day" => 22],
        'end' => ["month" => 6,"day" => 21],
    ],
    [
        'name' => 'Kräftan',
        'start' => ["month" => 6,"day" => 22],
        'end' => ["month" => 7,"day" => 22],
    ],
    [
        'name' => 'Lejonet',
        'start' => ["month" => 7,"day" => 23],
        'end' => ["month" => 8,"day" => 23],
    ],
    [
        'name' => 'Jungfrun',
        'start' => ["month" => 8,"day" => 24],
        'end' => ["month" => 9,"day" => 22],
    ],
    [
        'name' => 'Vågen',
        'start' => ["month" => 9,"day" => 23],
        'end' => ["month" => 10,"day" => 23],
    ],
    [
        'name' => 'Skorpionen',
        'start' => ["month" => 10,"day" => 24],
        'end' => ["month" => 11,"day" => 22],
    ],
    [
        'name' => 'Skytten',
        'start' => ["month" => 11,"day" => 23],
        'end' => ["month" => 12,"day" => 21],
    ],
    [
        'name' => 'Stenbocken',
        'start' => ["month" => 12,"day" => 22],
        'end' => ["month" => 01,"day" => 20],
    ],
    [
        'name' => 'Vattumannen',
        'start' => ["month" => 1,"day" => 21],
        'end' => ["month" => 2,"day" => 18],
    ],
    [
        'name' => 'Fiskarna',
        'start' => ["month" => 2,"day" => 19],
        'end' => ["month" => 3,"day" => 20],
    ],
];

function getsign($horoscopeList, $date) {
    
    for ($i = 0; $i < count($horoscopeList); $i++) {
        $horoscope = $horoscopeList[$i];
        
        if (($horoscope['start']['month'] == $date['month'] && $horoscope['start']['day'] <= $date['day']) || ($horoscope['end']['month'] == $date['month'] && $horoscope['end']['day'] >= $date['day'])) {
            
            error_log($horoscope['name']);
        
        if (($horoscope['start']['month'] == $date['month'] && $horoscope['start']['day'] <= $date['day']) || ($horoscope['end']['month'] == $date['month'] && $horoscope['end']['day'] >= $date['day'])) {
            
            return $horoscope['name'];
        };
    }
};      

?>











