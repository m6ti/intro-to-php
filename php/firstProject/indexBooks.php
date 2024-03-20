<?php

$books = [
    [

        'title' => "Atomic Habits",
        'author' => "J.C",
        'releaseYear' => 2000,
        'link' => "https://google.com"
    ],
    [
        'title' => "12 Rules For Life",
        'author' => "J.P",
        'releaseYear' => 2000,
        'link' => "https://google.com"
    ],
    [
        'title' => "12 More Rules For Life: Beyond Order",
        'author' => "J.P",
        'releaseYear' => 2000,
        'link' => "https://google.com"
    ]
];



$filteredBooks = array_filter($books, function($book) {
    return $book['releaseYear'] == 2000;
});

include "index.view.php";