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
            'purchaseUrl' => 'http://ex.com'
        ],
        [
            'name' => 'Project Hail',
            'author' => 'Sukumar',
            'purchaseUrl' => 'http://ex.com'
        ],
    ];
    ?>
    <ul>
        <?php
        foreach ($books as $book) :
        ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>