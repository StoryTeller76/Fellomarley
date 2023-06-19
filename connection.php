<?php
// Database configuration
$host = 'localhost';  // Replace with your database host
$dbname = 'youth programs';  // Replace with your database name
$username = 'root';  // Replace with your database username
$password = '';  // Replace with your database password

// Establish a database connection
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo("connection success:");
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bankAccount = $_POST['bankAccount'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $cv = $_FILES['cv']['name'];  // Assuming the file input name is 'cv'
    $proofs = $_FILES['proofs']['name'];  // Assuming the file input name is 'proofs'

    // Prepare and execute the SQL query to insert the data into the database
    $stmt = $conn->prepare("INSERT INTO employment (name, email, bank_account, gender, password, role, cv, proofs) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $email, $bankaccount, $gender, $password, $role, $cv, $proofs);
    $stmt->execute();

    // Move uploaded files to a desired location (e.g., 'uploads' folder)
    move_uploaded_file($_FILES['cv']['tmp_name'], 'uploads/' . $cv);
    move_uploaded_file($_FILES['proofs']['tmp_name'], 'uploads/' . $proofs);

    // Redirect to a success page or display a success message
    header('Location: program.php');
    exit();
}

