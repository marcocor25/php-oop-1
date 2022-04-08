<?php

require_once __DIR__ . "/class.php";

$ted = new Movie(
    "Ted",
    "Un orso di peluche festaiolo e sboccato rischia di far fallire i tentativi del suo amico umano di maturare e sposare la fidanzata.",
    "Commedia",
    "🇬🇧",
);

$bugiardo_bugiardo = new Movie(
    "Bugiardo Bugiardo",
    "Un avvocato abituato a vincere le sue cause a suon di bugie si trova irrimediabilmente costretto a dire la verità per 24 interminabili ore.",
    "Commedia",
    "🇬🇧",
);

$the_mask = new Movie(
    "The Mask",
    "Un mediocre impiegato di banca trova un'antica maschera che scatena i suoi desideri più nascosti, trasformandolo in un burlone spassosissimo.",
    "Commedia",
    "🇬🇧",
);

var_dump($ted, $bugiardo_bugiardo, $the_mask)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>

    <h1>
        <?php echo $ted->title ?>
    </h1>



</body>

</html>