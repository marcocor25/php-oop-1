<?php
class Movie {

    public $cover;
    public $title;
    public $description;
    public $genre;
    public $original_language;

    // CONSTRUCTOR
    function __construct($_cover, $_title, $_description, $_genre, $_original_language)
    {
        $this->cover = $_cover;
        $this->title = $_title;
        $this->description = $_description;
        $this->genre = $_genre;
        $this->original_language = $_original_language;
    }

    // METODO GETTER
    public function getFullMovie() {
        ?>
            <div class="card">
                <figure>
                    <img src="<?php echo $this->cover ?>" alt="<?php echo $this->title ?>">
                </figure>
                <div class="wrapper">
                    <h1><?php echo $this->title ?></h1>
                    <h4>
                        Trama
                        <p>
                            <?php echo $this->description ?>
                        </p>
                    </h4>
                    <h4>
                        Genere
                        <p>
                            <?php echo $this->genre ?>
                        </p>
                    </h4>
                    <h4>
                        Lingua originale
                        <p class="lang">
                            <?php echo $this->original_language ?>
                        </p>
                    </h4>
                </div>
            </div>
        <?php
    }

};

?>