<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    class Movie{
        public $title; //public or var are the same thing here
        // Public means anyone can change it
        private $rating; // private creates it so it cant be changed
        // Private means only you can change can change it

        function __construct($title, $rating)
        {
            $this->title = $title;
            $this->setRating($rating);
        }
        function getRating(){
            return $this->rating;
        }

        function setRating($rating){
            if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
                $this->rating = $rating;
            }else {
                $this->rating = "NR";
            }
        }
    }

    $avengers = new Movie("Avengers", "R");

    // G, PG, PG-13, R, NR

    // $avengers->setRating("PG");
    echo $avengers->getRating();

?>
    
</body>
</html>