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
    $books = ["Tamil", "English", "Maths"];
    ?>
    <ul>
        <?php
        foreach($books as $book) :
        ?>
        <li>
            <?= $book ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>