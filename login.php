<?php
session_start();
include "connection.php";
if($_SERVER[ 'REQUEST_METHOD']=="POST")
{
    $email=$_POST["email"];
    $password=$_POST["password"];
    if(!empty($email) && !empty($password) && !is_numeric($password))
    {
        $query="SELECT * FROM portal WHERE email='$email' LIMIT 1";
        $result=mysqli_query($conn,$query);
        if ($result)
        {
            if (mysqli_num_rows($result) > 0)
            {
                $user_data=mysqli_fetch_assoc($result);
                if(password_verify($password, $user_data['password']))
                {
                    $_SESSION['email'] = $email;
                    header("location:program.php");
                    die;
                }
            }
        }
    }
    echo "<script>alert('Invalid email or password')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ... your existing code ... -->
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <!-- ... your existing code ... -->
  <div class="login-container">
    
    <?php if (isset($errorMessage)): ?>
      <p class="error"><?php echo $errorMessage; ?></p>
    <?php endif; ?>
    <fieldset>
        <legend><h2>Login</h2></legend>
    <form action="login.php" method="POST">
     
      <input type="text" id="username" name="email" placeholder="username/email" required>
      <br><br>
      <input type="password"  name="password"  placeholder="Password" required>
      <br><br>
      <input type="submit" value="Login" class="login">
    </form>
    </fieldset>
  </div>
</body>
</html>
