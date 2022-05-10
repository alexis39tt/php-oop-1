<?php

class Movie
{
    public $nome;
    public $anno;
    public $voto;
    public function isRecent($_anno){
        if($_anno > 2015)
            $this->anno = $_anno.' (recente)';
        else
            $this->anno = $_anno.' (datato)';
    }
    function __construct($_voto)
    {
        $this->voto = $_voto;
    }
}

$movie1 = new Movie(9);
$movie1->nome = "Avengers: Endgame";
$movie1->isRecent(2019);

$movie2 = new Movie(7);
$movie2->nome = "The Dark Knigth";
$movie2->isRecent(2012);

$movie3 = new Movie(10);
$movie3->nome = "Inception";
$movie3->isRecent(2010);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <div id="root" style="display: flex; justify-content: space-evenly; font-family:Arial, Helvetica, sans-serif">
        <div style="width: 400px; border: 2px solid; padding: 0 20px">
            <h2 style="text-align: center;"><?php echo $movie1->nome ?></h2>
            <p>Anno: <?php echo $movie1->anno; ?></p>
            <p>Voto: <?php echo $movie1->voto; ?></p>
        </div>
        <div style="width: 400px; border: 2px solid; padding: 0 20px">
            <h2 style="text-align: center;"><?php echo $movie2->nome ?></h2>
            <p>Anno: <?php echo $movie2->anno; ?></p>
            <p>Voto: <?php echo $movie2->voto; ?></p>
        </div>
        <div style="width: 400px; border: 2px solid; padding: 0 20px">
            <h2 style="text-align: center;"><?php echo $movie3->nome ?></h2>
            <p>Anno: <?php echo $movie3->anno; ?></p>
            <p>Voto: <?php echo $movie3->voto; ?></p>
        </div>

    </div>
</body>

</html>