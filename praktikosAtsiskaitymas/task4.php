<?php

/*4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1.5 balas)*/

$holidays = [
    [
        'title' => 'Romantic Paris',
        'destination' => 'Paris',
        'price' => 1500,
        'tourists' => 55,
    ],
    [
        'title' => 'Amazing New York',
        'destination' => 'New York',
        'price' => 2699,
        'tourists' => 21,
    ],
    [
        'title' => 'Spectacular Sydey',
        'destination' => 'Sydey',
        'price' => 4130,
        'tourists' => 9,
    ],
    [
        'title' => 'Hidden Paris',
        'destination' => 'Paris',
        'price' => 1700,
        'tourists' => 10,
    ],
    [
        'title' => 'Emperors of the past',
        'destination' => 'Beijing',
        'price' => null,
        'tourists' => 10,
    ],
];

$holidaysTravels = array_reduce (
    $holidays,
    function($array, $holiday) {
        if ($holiday['price'] === null) {
            return $array;
        }
        $holidaysTravel = $holiday['destination'];
        if (!isset($array[$holidaysTravel])) {
            $array[$holidaysTravel] = [
                'titles' => [],
                'total' => 0,
            ];
        }
        $array[$holidaysTravel]['titles'][] = $holiday['title'];
        $array[$holidaysTravel]['total'] += $holiday['price'] * $holiday['tourists'];
        return $array;
    }, []);

    foreach($holidaysTravels as $holidaysTravel => $data) {
        print_r("Destination: " . $holidaysTravel);
        echo "Titles: " . implode(", ", $data['titles']) .PHP_EOL;
        echo "Total: " . $data['total'] .PHP_EOL;
};


$summerTravel = json_encode($holidays, JSON_PRETTY_PRINT);
file_put_contents('./task.json', $summerTravel);
