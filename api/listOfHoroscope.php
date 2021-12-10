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

function calculate($horoscopeList , $date) {

    $date = ["month = 3, ']

for ($i = 0; $i < count($horoscopeList); $i++) {
    $horoscope = $horoscopeList[$i];

   
    $startMonth = $horoscope["start"]["month"];
    $startDay = $horoscope["start"]["day"];
    $endMonth = $horoscope["end"]["month"];
    $endDay = $horoscope["end"]["day"];

    if ($date == $startMonth, $startDay 


    if ($startMonth === $date  3 && $startDay >= 21 && $endMonth <= 4 && $endDay <= 20) {
        return 'Väduren';
    }

}
}


?>

function getsign($startMonth, $startDay, $endMonth, $endDay) {
if(($startMonth==1 && $startDay>20)||($endMonth==2 && $endDay<19)) { $mysign="Vattumannen" ; } 
if(($startMonth==2 && $startDay>18)||($endMonth==3 && $endDay<21)) { $mysign="Fiskarna" ; } 
if(($startMonth==3 && $startDay>20)||($endMonth==4 && $endDay<21)) { $mysign="Väduren" ; } 
if(($startMonth==4 && $startDay>21)||($endMonth==5 && $endDay<22)) { $mysign="Oxen" ; } 
if(($startMonth==5 && $startDay>21)||($endMonth==6 && $endDay<22)) { $mysign="Tvillingarna" ; } 
if(($startMonth==6 && $startDay>21)||($endMonth==7 && $endDay<23)) { $mysign="Kräftan" ; } 
if(($startMonth==7 && $startDay>22)||($endMonth==8 && $endDay<24)) { $mysign="Lejon" ; } 
if(($startMonth==8 && $startDay>23)||($endMonth==9 && $endDay<23)) { $mysign="Jungfru" ; } 
if(($startMonth==9 && $startDay>22)||($endMonth==10 && $endDay<24)) { $mysign="Vågen" ; } 
if(($startMonth==10 && $startDay>23)||($endMonth==11 && $endDay<23)) { $mysign="Skorpion" ; } 
if(($startMonth==11 && $startDay>21)||($endMonth==12 && $endDay<21)) { $mysign="Skytten" ; } 
if(($startMonth==12 && $startDay>21)||($endMonth==1 && $endDay<21)) { $mysign="Stenbock" ; } 











return $mysign; } print_r(getsign(16,7));














