<?php 
    include  __DIR__. '/Models/Movie.php' ;
    include __DIR__.'/db.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex flex-wrap">
    <?php foreach($movies as $movie){ 
        $movie_instance = new Movie($movie['title'], $movie['director'], $movie['genre'], $movie['releaseYear']);
    ?>
        
        <div class="card w-25">
            <h2><?php echo $movie_instance->getTitle() ?></h2>
            <ul>
                <li><?php echo 'Director: '. $movie_instance->getDirector()  ?></li>
                <li><?php echo 'Genre: '. $movie_instance->getGenre()  ?></li>
                <li><?php echo 'Release Year: '. $movie_instance->getReleaseYear()  ?></li>
            </ul>
        </div>
    <?php } ?>
    </div>
</body>
</html>