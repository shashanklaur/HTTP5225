<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users"; // API URL
    $data = file_get_contents($url); // Fetch JSON data
    return json_decode($data, true); // Convert JSON to an associative array
}

// Get the list of users
$users = getUsers();

// Display user information using a for loop
echo "<h2>List of Users</h2>";
echo "<ul>";

for ($i = 0; $i < count($users); $i++) {
    echo "<li>";
    echo "<strong>Name:</strong> " . $users[$i]['name'] . "<br>";
    echo "<strong>Username:</strong> " . $users[$i]['username'] . "<br>";
    echo "<strong>Email:</strong> " . $users[$i]['email'] . "<br>";
    echo "<strong>Address:</strong> " . $users[$i]['address']['street'] . ", " . $users[$i]['address']['city'] . " - " . $users[$i]['address']['zipcode'] . "<br>";
    echo "</li><br>";
}

echo "</ul>";
?>
