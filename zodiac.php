<?php



// Function to add two numbers
function getChineseZodiac($year) {
    $zodiac = array(
        "Rat" => "rat.png",
        "Ox" => "ox.png",
        "Tiger" => "tiger.png",
        "Rabbit" => "rabbit.png",
        "Dragon" => "dragon.png",
        "Snake" => "snake.png",
        "Horse" => "horse.png",
        "Goat" => "goat.png",
        "Monkey" => "monkey.png",
        "Rooster" =>"rooster.png",
        "Dog" => "dog.png",
        "Pig" => "pig.png"
    );

    $animals = array_keys($zodiac);
    $baseYear = 1900; // Rat
    $index = ($year - $baseYear) % 12;
    $animal = $animals[$index];

    // Return the key-value pair for the zodiac sign
    return [$animal => $zodiac[$animal]];
}



?>