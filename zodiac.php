<?php



// Function to add two numbers
function  getChineseZodiac($year) {
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

    $baseYear = 1900; // Rat
    $index = ($year - $baseYear) % 12;

    return $zodiac[$index];
}


//Use this formula to determine which item in the array to choose, given a year 

// if (isset($_POST['submit'])) {
//     myFunction();
// }


?>