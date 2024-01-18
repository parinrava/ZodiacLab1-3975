<?php
include 'zodiac.php';

// Initialize variables
$zodiacSign = null;
$zodiacImage = null;
$zodiacAltText = null;

// Check if the form has been submitted and the 'year' POST variable is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['year'])) {
    $year = intval($_POST['year']);
    // Call the getChineseZodiac function and get the sign
    $zodiacKey = getChineseZodiac($year);
    // Extract sign and image path
    $zodiacSign = array_keys($zodiacKey)[0];
    $zodiacImage = $zodiacKey[$zodiacSign];
    $zodiacAltText = 'Image of ' . $zodiacSign;
}
?>


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
    <input type="number" name="year" id="year" min="1900" max="2025" required>
    <input type="submit" value="Find Zodiac">
    <button onclick="window.location.href=window.location.href;return false;">Clear</button>
</form>

<?php
// If the zodiacSign has been set, display the image and name
if ($zodiacSign !== null) {
    echo "<p>Your Chinese Zodiac sign is: " . $zodiacSign . "</p>";
    echo "<img src='" . $zodiacImage . "' alt='" . $zodiacAltText . "' width='200' height='200'>";
}
?>

</body>
</html>