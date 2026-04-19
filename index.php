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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
</head>
<body class="bg-dark text-light">
    <!-- <?php 
    foreach ($movies as $movie){
        echo $movie->getSummary() . "<br>";
    }
    ?> -->
<div class="container mt-5">
    <h1 class="mb-4 text-center">Movies List</h1>

    <table class="table table-hover table-striped ">
        <thead class="table-dark">
            <tr>
                <th>TITLE</th>
                <th>DIRECTOR</th>
                <th>RELEASE YEAR</th>
                <th>GENRE</th>
                <th>RATING AGE</th>
                <th>VOTE</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movies as $movie) { ?>
                <tr>
                    <td><strong><?php echo $movie->title; ?></strong></td>
                    
                    <td><?php echo $movie->director; ?></td>
                    
                    <td><?php echo $movie->releaseYear; ?></td>
                    
                    <td>
                        <?php 
                            $genreNames = [];
                            foreach ($movie->genres as $genre) {
                                $genreNames[] = $genre->name;
                            }
                            echo implode(", ", $genreNames);
                        ?>
                    </td>

                    <td>
                        <span class="badge rounded-pill bg-warning">
                            <?php echo $movie->genres[0]->ageRating; ?>
                        </span>
                    </td>

                    <td class="text-info">
                        <?php echo $movie->getStars(); ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>