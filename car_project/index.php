<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            padding: 20px;
            text-align: center;
        }
        h2 {
            color: #333;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .expensive {
            font-weight: bold;
            color: red;
        }
        .old-car {
            font-style: italic;
        }
    </style>
</head>
<body>

<h2>Car List</h2>

<?php
// Step 1: Connect to the Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Retrieve Data
$sql = "SELECT * FROM cars";
$result = $conn->query($sql);

// Step 3: Display Data
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Model</th><th>Year</th><th>Price</th><th>Category</th></tr>";

    while ($row = $result->fetch_assoc()) {
        $priceClass = ($row["price"] > 50000) ? "expensive" : "";
        $yearClass = ($row["year"] < 2021) ? "old-car" : "";

        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td class='$yearClass'>" . $row["name"] . "</td>";
        echo "<td class='$yearClass'>" . $row["model"] . "</td>";
        echo "<td class='$yearClass'>" . $row["year"] . "</td>";
        echo "<td class='$priceClass'>$" . number_format($row["price"], 2) . "</td>";
        echo "<td>" . $row["category"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

// Close connection
$conn->close();
?>

</body>
</html>
