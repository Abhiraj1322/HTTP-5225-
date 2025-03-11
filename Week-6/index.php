<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "schooldb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Retrieve data from MySQL
$sql = "SELECT * FROM schools";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Board List</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

<h2>School Boards (2019-2020)</h2>

<table>
    <tr>
        <th>Academic Year</th>
        <th>Board No</th>
        <th>Board Name</th>
        <th>Language</th>
    </tr>

    <?php

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['academic_year']}</td>
                    <td>{$row['board_no']}</td>
                    <td>{$row['board']}</td>
                    <td>{$row['language']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No records found</td></tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html>
