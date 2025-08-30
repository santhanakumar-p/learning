<?php

$books = [
    [
        'name' => 'Do Android Dream',
        'author' => 'Santhanakumar',
        'releasedYear' => 2016,
        'purchaseUrl' => 'http://ex.com'
    ],
    [
        'name' => 'Project Hail',
        'author' => 'Sukumar',
        'releasedYear' => 1999,
        'purchaseUrl' => 'http://ex.com'
    ],
    [
        'name' => 'Mangatha film',
        'author' => 'Sukumar',
        'releasedYear' => 2022,
        'purchaseUrl' => 'http://ex.com'
    ],
];

$filteredBooks = array_filter($books, function ($book) {
    return $book['releasedYear'] >= 2000;
});

require "separate-logic-from-the-template-index.php";
