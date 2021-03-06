<?php

require_once __DIR__ . "/class.php";

$ted = new Movie(
    "https://images.everyeye.it/img-cover/ted-16299-320x450.jpg",
    "Ted",
    "Un orso di peluche festaiolo e sboccato rischia di far fallire i tentativi del suo amico umano di maturare e sposare la fidanzata.",
    "Comico",
    "π¬π§",
);

$ghost_movie = new Movie(
    "https://pad.mymovies.it/filmclub/2012/10/168/locandina.jpg",
    "Ghost Movie",
    "Questa parodia dei film horror segue il trasferimento di una giovane coppia in una casa dove si nasconde uno spirito malvagio dalle trovate terribilmente spassose.",
    "Commedia horror",
    "π¬π§",
);

$the_mask = new Movie(
    "https://m.media-amazon.com/images/M/MV5BOWExYjI5MzktNTRhNi00Nzg2LThkZmQtYWVkYjRlYWI2MDQ4XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_.jpg",
    "The Mask",
    "Un mediocre impiegato di banca trova un'antica maschera che scatena i suoi desideri piΓΉ nascosti, trasformandolo in un burlone spassosissimo.",
    "Commedia",
    "π¬π§",
);

$movies_array = [];

array_push($movies_array, $ted, $ghost_movie, $the_mask);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Movies</title>
</head>

<body>

    <h1 class="main-title">my movies</h1>

    <div class="container">

        <?php

        // CARDS
        foreach ($movies_array as $cards) {
            $cards->getFullMovie();
        }

        ?>

    </div>

</body>

</html>