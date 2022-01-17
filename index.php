<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- /**
     * DEFINIRE CLASSE Film:
     *      Attributi:
     *      - titolo
     *      - sottotiolo
     *      - regista
     * 
     *      Metodi:
     *      - costruttore che accetta titolo
     *      - getFullTitle: 
     *          Se sottotitolo presente:
     *            restituisce "titolo: sottotitolo" 
     *          Se sottotiolo assente:
     *            restituisce "titolo" 
     *      - __toString: 
     *          Se regista presente:
     *            restituisce "fullTitle | regista"
     *          Se regista assente:
     *            restituisce "fullTitle | ???"
     * 
     * UTILIZZO OGGETTI Film:
     * 
     *      Generare 3 istanze della classe Film:
     *      - uno con solo il titolo
     *      - uno con titolo e sottotitolo
     *      - uno con titolo, sottotiolo e regista
     * 
     *      Stampare tutti gli oggetti tramite toString (implicito)
     * 
     *  RISULTATO ATTESO:
     * 
     *      Matrix | ???
     *      Fantozzi 2: il ritorno di fantozzi | ???
     *      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
     */ -->

<?php

    class films{
        public $title;
        public $subTitle;
        public $movieDirector;
        

        public function __construct($title){
            $this -> title = $title;
        }

        public function getFullTitle(){
            if ($this -> subTitle){
                return $this -> title . " :" . $this -> subTitle;
            } else {
                return $this -> title;
            }
        }

        public function __toString(){
            if ($this -> movieDirector){
                return $this -> getFullTitle() ." | ". $this -> movieDirector;
            } else {
                return $this -> getFullTitle() ." | ". "???";
            }
        }
    }

    $f1 = new films("Matrix");

    $f2 = new films ("Fantozzi 2");

    $f3 = new films("Peter Pan");
    
    $f2 -> subTitle = "il ritorno di fantozzi";
    $f3 -> subTitle = "il ritorno all'isola che non c'e'";

    $f3 -> movieDirector = "Robin Budd";



    echo $f1 . "<br>";
    echo $f2 . "<br>";
    echo $f3 . "<br>";



?>
</body>
</html>