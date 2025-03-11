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

// Retrieve data
$sql = "SELECT * FROM music_list";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music List</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        img { width: 50px; height: 50px; }
    </style>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<h2>My Music List</h2>

<div class="table-block">
    
    <table>
        <tr>
            <th>Song Title</th>
            <th>Artist</th>
            <th>Album</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Duration</th>
            <th>Rating</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td><a href='details.php?song_id={$row['id']}' class='view-details'>{$row['song_title']}</a></td>
                        <td>{$row['artist']}</td>
                        <td>{$row['album']}</td>
                        <td>{$row['genre']}</td>
                        <td>{$row['release_year']}</td>
                        <td>{$row['duration']}</td>
                        <td>{$row['rating']}</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No songs found</td></tr>";
        }
        ?>

    </table>
</div>

</body>
</html>

<?php
$conn->close();
?>
