<?php

//create function to determine zodiac sign


// Example PHP Script with Functions Defined at the Top

// Function to add two numbers
function Year() {
    $zodiac = array(
        "Rat" => "img/rat.jpg",
        "Ox" => "img/ox.jpg",
        "Tiger" => "img/tiger.jpg",
        "Rabbit" => "img/rabbit.jpg",
        "Dragon" => "img/dragon.jpg",
        "Snake" => "img/snake.jpg",
        "Horse" => "img/horse.jpg",
        "Goat" => "img/goat.jpg",
        "Monkey" => "img/monkey.jpg",
        "Rooster" => "img/rooster.jpg",
        "Dog" => "img/dog.jpg",
        "Pig" => "img/pig.jpg"
    );

    //if the submit button is clicked, then the year is set to the year entered in the form
    if (isset($_POST['submit'])) {
    //determine which chinese zodiac year is is based on the year entered in the form


       $year = $_POST['year'];
    
    
     
    }


    echo $zodiac[$year] ;
}


//Use this formula to determine which item in the array to choose, given a year 

// if (isset($_POST['submit'])) {
//     myFunction();
// }


?>