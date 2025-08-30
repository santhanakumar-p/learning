<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primitive Array</title>
</head>

<body>
    <h1>Book List</h1>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>"><?= $book['name'] ?> (<?= $book['releasedYear'] ?>) - By <?= $book['author'] ?></a>
            </li>
    </ul>

<?php endforeach; ?>
</ul>
</body>

</html>