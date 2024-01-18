<?php include 'zodiac.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zodiac</title>

</head>


<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="year">Birth year:</label>
    <input type="number" name="year" id="year" min="1900" max="2000" required>
    <input type="submit" value="Find Zodiac">
    <input type="reset" value="Clear">
</form>

<?php
// If the zodiacSign has been set, display the image and name
if (isset($zodiacSign)) {
    echo "<p>Your Chinese Zodiac sign is: " . $zodiacSign . "</p>";
    echo "<img src='" . $zodiacImage . "' alt='" . $zodiacAltText . "' width='200' height='200'>";
}
?>

</body>
</html>