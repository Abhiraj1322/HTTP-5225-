<?php
// Database credentials
$host = "localhost";
$user = "root";  // Change if needed
$pass = "";      // Change if needed
$dbname = "mymusic-db"; 

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get song_id from URL
$song_id = isset($_GET['song_id']) ? intval($_GET['song_id']) : 0;

// Retrieve song details
$sql = "SELECT * FROM music_list WHERE id = $song_id";
$result = $conn->query($sql);

// Check if song exists
if ($result->num_rows > 0) {
    $song = $result->fetch_assoc();
} else {
    echo "<h2>Song not found</h2>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Details - <?php echo $song['song_title']; ?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <h2>Song Details</h2>
    
    <div class="container">

        <div class="song-details">
            <!-- Song Information -->
            <div class="song-info">
                <h3 class="song-title"><?php echo $song['song_title']; ?></h3>
                <p class="song-artist"><strong>Artist:</strong> <?php echo $song['artist']; ?></p>
                <p class="song-album"><strong>Album:</strong> <?php echo $song['album']; ?></p>
                <p class="song-genre"><strong>Genre:</strong> <?php echo $song['genre']; ?></p>
                <p class="song-year"><strong>Release Year:</strong> <?php echo $song['release_year']; ?></p>
                <p class="song-duration"><strong>Duration:</strong> <?php echo $song['duration']; ?></p>
                <p class="song-rating"><strong>Rating:</strong> <?php echo $song['rating']; ?> / 10</p>
            </div>
        </div>

        <!-- Back Link -->
        <a href="index.php" class="back-link">Back to Music List</a>
    </div>

</body>
</html>

<?php
$conn->close();
?>
