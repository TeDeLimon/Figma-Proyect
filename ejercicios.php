<?php

$personas = [
    [
        'nombre' => 'Jairo',
        'apellido' => 'García',
        'edad' => 47
    ],
    [
        'nombre' => 'Juan',
        'apellido' => 'Palomo',
        'edad' => 22
    ],
    [
        'nombre' => 'Luís',
        'apellido' => 'Andrade',
        'edad' => 54
    ],
    [
        'nombre' => 'Alberto',
        'apellido' => 'Pérez',
        'edad' => 18
    ],
    [
        'nombre' => 'Miguel',
        'apellido' => 'Yuste',
        'edad' => 36
    ],
    [
        'nombre' => 'Dionisio',
        'apellido' => 'Andrade',
        'edad' => 54
    ]
];

// 1º Vamos a crear un array con las edades de las personas
$edades = array_map(fn ($persona) => $persona['edad'], $personas);
$edades = array_column($personas, 'edad');

sort($edades);

// 2º Obtener los usuarios que tienen cada una de las edades del array edades

$personas_por_edad = [];

foreach ($edades as $edad) {

    $personas_por_edad[$edad] = array_filter($personas, fn ($persona) => $persona['edad'] === $edad);
}

// var_dump($personas_por_edad);


// <=> Spaceship operator if A y B son iguales retorna 0, si A es mayor que B retorna 1, si B es mayor que A retorna -1
usort($personas, fn ($a, $b) => $a['edad'] <=> $b['edad']);

//* https://platzi.com/clases/2646-php/44434-instalacion-de-php-en-macos/

// var_dump($personas);

// Ejercicio: Dados dos arrays con información acerca de libros, quiero obtener únicamente aquellos libros que son únicos de cada array

$libreria = [
    "libros" => [
        [
            "titulo" => "El señor de los anillos",
            "autor" => "J.R.R. Tolkien",
            "genero" => "Fantasía"
        ],
        [
            "titulo" => "El código Da Vinci",
            "autor" => "Dan Brown",
            "genero" => "Misterio"
        ],
        [
            "titulo" => "El principito",
            "autor" => "Antoine de Saint-Exupéry",
            "genero" => "Infantil"
        ]
    ]
];

$libreria_2 = [
    "libros" => [
        [
            "titulo" => "Los pilares de la tierra",
            "autor" => "Ken Follet",
            "genero" => "Histórico"
        ],
        [
            "titulo" => "Millenium",
            "autor" => "Stieg Larsson",
            "genero" => "Thriller"
        ],
        [
            "titulo" => "El principito",
            "autor" => "Antoine de Saint-Exupéry",
            "genero" => "Infantil"
        ]
    ]
];
