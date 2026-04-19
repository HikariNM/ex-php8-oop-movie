<?php 

require_once 'Models/Genre.php';
require_once 'Models/Movie.php';
require_once 'db.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-php8-oop-movie</title>
</head>
<body>
    <?php 
    
    foreach ($movies as $movie){
        echo $movie->getSummary() . "<br>";
    }
    
    ?>
</body>
</html>