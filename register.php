<?php
session_start();
include "connection.php"; // Add correct path to config file

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST["name"];
    $idNumber = $_POST["idNumber"];
    $email = $_POST["email"];
    $bankAccount = $_POST["bankAccount"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirmPassword"];
    $role = $_POST["role"];
    $cv = $_FILES["cv"]["name"];
    $proofs = $_FILES["proofs"]["name"];

    if (!empty($name) && !empty($idNumber) && !empty($email) && !empty($bankAccount) && !empty($gender) && !empty($password) && !empty($confirm_password) && $password == $confirm_password) {
        $stmt = $conn->prepare("INSERT INTO portal (name, id_number, email, bank_account, gender, password, role, cv, proofs) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $name, $idNumber, $email, $bankAccount, $gender, $password, $role, $cv, $proofs);
        $stmt->execute();
        echo "<script type='text/javascript'>alert('successfully registered')</script>";
    } else {
        echo "<script type='text/javascript'>alert('please enter valid information')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
  <div class="container">
    <h2>Registration Form</h2>
    <form id="registrationForm" method="post" enctype="multipart/form-data">
      <label for="user">Username</label>
      <input type="text" id="user" name="usernamename">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="idNumber">ID Number:</label>
      <input type="text" id="idNumber" name="idNumber" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="bankAccount">bank account:</label>
      <input type="text" id="bankAccount" name="bank  account" required>
      <fieldset>
        <legend>Gender:</legend>
        <label for="male">Male</label>
        <input type="radio" id="male" name="gender" value="male" checked>
        <label for="female">Female</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="other">Other</label>
        <input type="radio" id="other" name="gender" value="other">
      </fieldset>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <label for="confirmPassword">Confirm Password:</label>
      <input type="password" id="confirmPassword" name="confirmPassword" required>
      <label for="role">Role:</label>
      <select id="role" name="role" onchange="toggleOptionalFields()">
        <option value="supervisor">Supervisor</option>
        <option value="worker">Worker</option>
        <option value="admin">Admin</option>
      </select>

      <div id="cvContainer" class="optional-field">
        <label for="cv">Upload CV:</label>
        <input type="file" id="cv" name="cv">
      </div>

      <div id="proofsContainer" class="optional-field">
        <label for="proofs">Upload Work Proofs:</label>
        <input type="file" id="proofs" name="proofs" multiple>
      </div>

      <input type="submit" value="Register">
    </form>
  </div>

  <script src="register.js"></script>
</body>
</html>
