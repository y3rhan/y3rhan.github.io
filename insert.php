<?php
// Database configuration
$servername = "213.238.168.71";
$username = "yerhan";
$password = "Dem9r53!3";
$dbname = "datalab";

// Create a new record
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$gender = $_POST['gender'];


// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the data into the table
$sql = "INSERT INTO student_form (full_name, email, gender) VALUES ('$fullname','$email','$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>