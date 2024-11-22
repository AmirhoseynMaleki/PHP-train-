<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Stat</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php 
    $bookName = "Clean Code";
    $read = false;
    if($read) {
        $message = "You had read the bood: $bookName";
    } else {
        $message = "You had NOT read the bood: $bookName";
    }
    ?>
    <h1>
        <? 
        echo $message;
        ?>
    </h1>
</body>

</html>