<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <style>
      body {
        font-family: Arial, sans-serif;
      }
      .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
      }
      h2 {
        text-align: center;
      }
      label {
        display: block;
        margin-top: 10px;
      }
      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
      }
      button {
        background-color: #1b347e;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
      }
      button:hover {
        background-color: #0e2356;
      }
    </style>
  </head>

  <?php
  $hostname = "localhost";
  $username = "root";

  // Create a connection to the database.
  $database = "unawa";
  $connection = mysqli_connect($hostname, $username, '', $database);

  // Check the connection.
  if (!$connection) {
      die("Connection failed: " . mysqli_connect_error());
  }
  
  if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];  

    if (
        strlen($password) < 8 ||                // Minimum length of 8 characters
        !preg_match('/\d/', $password) ||       // Contains at least one digit
        !preg_match('/[A-Z]/', $password)       // Contains at least one uppercase letter
    ) {
        echo "<script>alert('Password complexity requirements not met.');</script>";
    } else {
        if ($password !== $confirmPassword) {
            echo "<script>alert('Password and Confirm Password do not match.');</script>";
        } else {
            $checkQuery = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($connection, $checkQuery);

            if (mysqli_num_rows($result) > 0) {
                echo "<script>alert('Email already registered.');</script>";
            } else {
                $insertQuery = "INSERT INTO users (Name, Email, Password) VALUES ('$name', '$email', '$password')";

                if (mysqli_query($connection, $insertQuery)) {
                     echo "<script>alert('Registration successful.');</script>";
                } else {
                    echo "Error: " . mysqli_error($connection);
                }
            }
        }
    }
  }
  ?>

  <body>
    <div class="container">
      <h2>Sign Up</h2>
      <form action="join.php" method="post">
  <label for="name">Name</label>
  <input type="text" id="name" name="name" required />

  <label for="email">Email</label>
  <input type="text" id="email" name="email" required />

  <label for="password">Password</label>
  <input type="password" id="password" name="password" required />

  <label for="confirm-password">Confirm Password</label>
  <input type="password" id="confirm-password" name="confirm-password" required />

  <button type="submit" name="signup">Sign Up</button>
</form>

    </div>
  </body>
</html>
