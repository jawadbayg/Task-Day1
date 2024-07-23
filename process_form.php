<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "form_php"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$age = $conn->real_escape_string($_POST['age']);
$country = $conn->real_escape_string($_POST['country']);
$gender = $conn->real_escape_string($_POST['gender']);

$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

if (empty($nameErr) && empty($emailErr) && empty($ageErr) && empty($countryErr) && empty($passwordErr)&& empty($genderErr)) {

    $stmt = $conn->prepare("INSERT INTO form_data (name, email, age, country, gender, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $name, $email, $age, $country, $gender, $hashed_password);


    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

 else {
    echo "There were errors in your submission.";
}

$conn->close();
?>
