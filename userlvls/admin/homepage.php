<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Signs</title>
</head>

<body>
    <h1>PENDING SIGNS</h1>

    <?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "unawa"; // Replace with your database name

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to count rows in the "signpending" table
    $sql = "SELECT COUNT(*) AS count FROM signpending";
    $result = $conn->query($sql);

    if ($result) {
        $row = $result->fetch_assoc();
        $count = $row['count'];
        echo "Total pending signs in the database: $count";
    } else {
        echo "Error fetching data from the database.";
    }

    // Close the database connection
    $conn->close();
    ?>

    <a href="pendingsigns.php">View</a>

    <br><br>
    <a href="approvedsigns.php">Approved Signs</a>
</body>

</html>