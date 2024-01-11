<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zodiac</title>

</head>


<body>
<form action="zodiac.php" method = "post"> birth year</label>


    <input type="number" name="year" id="year" min="1900" max="2000"  required  >
    <input type='submit' value='zodiac'>
    <input type='reset' value='clear'>
    <br>
  
    <img src="img/<?php echo $zodiac; ?>.jpg" alt="zodiac" width="200" height="200">

</body>
</html>