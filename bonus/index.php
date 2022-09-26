<?php
include __DIR__ . '/app/Movie.php';

$movie1= new Movie(
     'https://movieplayer.net-cdn.it/t/images/2022/06/07/prey-1sht-digital-srgb-v9_jpg_1100x0_crop_q85.jpg',
     'Prey',
     'Thriller,Azione,Fantascienza',
     1.40,
     2022,
     );
// var_dump($movie1);

$movie2= new Movie(
    'http://2.bp.blogspot.com/_74tG8e6ZDUQ/TUvUaRr7J7I/AAAAAAAAHoY/EhllyRdqUNg/s1600/avatar-poster-locandina.jpg',
    'Avatar',
    'Fantasy,Azione,Fantascienza',
     2.42,
     2009,
    );
// var_dump($movie2);
$movie3= new Movie(
    'https://pbs.twimg.com/media/FFyTgQhUUAIAZIw?format=jpg&name=900x900',
    'Morbius',
    'Fantasy,Azione,Fantascienza',
     1.45,
     '2022',
    );
$movies = [$movie1, $movie2,$movie3];

// var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>php-oop-1</title>
</head>
<body>
    <div id="app">

        <div class="container">
            <h1 class="title_section">Movies :</h1>
            <ul class="card_wrapper">
    
                <?php
                    foreach($movies as $movie){
                    ?>
    
                        <li class="card">
                            <div class="card_img">
                                <img src="<?= $movie->poster ?>" alt="">
                            </div>
                            <div class="body_card">
                                <h3>titolo: <?= $movie->title?></h3>
                                <p>genere: <?= $movie->genre?></p>
                                <p>durata: <?= $movie->duration?></p>
                                <p>anno: <?= $movie->year?></p>
                            </div>
                        </li>
    
                    <?php
                    }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>