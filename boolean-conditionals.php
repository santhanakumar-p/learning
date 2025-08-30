<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean Conditional</title>
</head>
<body>
    <?php 
    $name = "Santhanakumar Pitchai";
    $read = false;

    if($read){
        $message = "You have read $name";
    }else{
        $message = "Yo have NOT read $name";
    }
    ?>
    <h1><?= $message ?></h1>
</body>
</html>