<?php
include __DIR__ . '/app/Movie.php';

$movie1= new Movie(
     'https://movieplayer.net-cdn.it/t/images/2022/06/07/prey-1sht-digital-srgb-v9_jpg_1100x0_crop_q85.jpg',
     'Prey',
     'Thriller,Azione,Fantascienza',
     1.40,
     2022,
     );
var_dump($movie1);

$movie2= new Movie(
    'http://2.bp.blogspot.com/_74tG8e6ZDUQ/TUvUaRr7J7I/AAAAAAAAHoY/EhllyRdqUNg/s1600/avatar-poster-locandina.jpg',
    'Avatar',
    'Fantasy,Azione,Fantascienza',
     2.42,
     2009,
    );
var_dump($movie2);

$movies = [$movie1, $movie2];

var_dump($movies);


