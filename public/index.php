<?php

require __DIR__."/../vendor/autoload.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Components</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="w-full h-screen flex items-center justify-center">
    <?php
        // Ideal API
        // <Button id="button1" type="button" class="asd">Submit</Button>
        (new App\Classes\Button(['id' => 'button1', 'type' => 'button', 'title' => 'Submit', 'class' => 'rounded-lg text-sm']))->render();
    ?>
</body>
</html>