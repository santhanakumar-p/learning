<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primitive Array</title>
</head>

<body>
    <h1>Book List</h1>

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
            'name' => 'Project Hail',
            'author' => 'Sukumar',
            'releasedYear' => 2022,
            'purchaseUrl' => 'http://ex.com'
        ],
    ];

    function filterByAuthor($books, $author)
    {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    }

    ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'Santhanakumar') as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>"><?= $book['name'] ?> (<?= $book['releasedYear'] ?>) - By <?= $book['author'] ?></a>
            </li>
    </ul>

<?php endforeach; ?>
</ul>
</body>

</html>