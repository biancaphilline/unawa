<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
    <style>
      @import url("https://fonts.googleapis.com/css?family=Poppins:400, 700");

      @font-face {
        font-family: "VAGRoundedStd-Bold";
        font-style: normal;
        font-weight: 700;
        src: url("assets/fonts/VAGRoundedStd-Bold.otf") format("opentype");
      }

      @font-face {
        font-family: "ArialRoundedMTBoldRegular";
        font-style: normal;
        font-weight: 400;
        src: url("assets/fonts/ArialRoundedMTBoldRegular.ttf")
          format("truetype");
      }

      .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: white;
        z-index: 100;
      }

      .navbar-container {
        background-color: white;
        height: 106px;
        left: 0;
        position: absolute;
        width: 100%;
      }

      .nav-buttons {
        align-items: flex-start;
        display: flex;
        gap: 30px;
        height: 25px;
        left: 474px;
        min-width: 503px;
        position: absolute;
        top: 40px;
        text-decoration: none !important;
      }

      .home {
        cursor: pointer;
        letter-spacing: 0;
        line-height: normal;
        min-height: 24px;
        min-width: 49px;
        font-family: "Poppins";
        font-weight: bold;
        font-size: 16px;
        color: #333333;
        text-decoration: none !important;
      }

      .about {
        cursor: pointer;
        align-self: flex-end;
        letter-spacing: 0;
        line-height: normal;
        min-height: 24px;
        min-width: 51px;
        font-family: "Poppins";
        font-weight: bold;
        font-size: 16px;
        color: #333333;
      }

      .fsl-translator {
        cursor: pointer;
        letter-spacing: 0;
        line-height: normal;
        margin-top: 0.13px;
        min-height: 24px;
        min-width: 116px;
        font-family: "Poppins";
        font-weight: bold;
        font-size: 16px;
        color: #333333;
      }

      .learn-button {
        align-items: center;
        display: inline-flex;
        gap: 8px;
        justify-content: center;
        margin-top: 0.13px;
        position: relative;
        font-family: "Poppins";
        font-weight: bold;
        font-size: 16px;
        color: #333333;
      }

      .akar-iconschevron-down {
        height: 12px;
        position: relative;
        width: 12px;
      }

      .learn {
        cursor: pointer;
        letter-spacing: 0;
        line-height: normal;
        margin-top: -1px;
        position: relative;
        width: fit-content;
        font-family: "Poppins";
        font-weight: bold;
        font-size: 16px;
        color: #333333;
      }

      .contact-us {
        cursor: pointer;
        align-self: center;
        letter-spacing: 0;
        line-height: normal;
        margin-bottom: 1.87px;
        min-height: 21px;
        width: 93px;
        font-family: "Poppins";
        font-weight: bold;
        font-size: 16px;
        color: #333333";
      }

      .logo {
        cursor: pointer;
        height: 56px;
        left: 35px;
        object-fit: cover;
        position: absolute;
        width: 160px;
        margin-top: 25px;
      }

      .join-now {
        align-items: flex-start;
        background-color: white;
        display: flex;
        flex-direction: column;
        gap: 142px;
        height: 1739px;
        overflow: hidden;
        width: 100%;
      }

      .hidden,
      .hidden * {
        pointer-events: none;
        visibility: hidden;
      }

      
      .overlap-group8 {
        height: 1179px;
        margin-top: -14px;
        position: relative;
        width: 100%;
      }

      #name::placeholder {
        color: #9B9988;
        font-family: "Poppins";
      }

      #email::placeholder {
        color: #9B9988;
        font-family: "Poppins";
      }

      #password::placeholder {
        color: #9B9988;
        font-family: "Poppins";
      }

      #confirm-password::placeholder {
        color: #9B9988;
        font-family: "Poppins";
      }

      #login-email::placeholder {
        color: #9B9988;
        font-family: "Poppins";
      }

      #login-password::placeholder {
        color: #9B9988;
        font-family: "Poppins";
      }

      .by-signing-up-you-a {
        color: #333333;
        font-family: "Poppins";
        font-size: 20px;
        font-weight: 400;
        letter-spacing: 0;
        line-height: normal;
        text-align: center;
        margin-left: 100px;
        width: 369px;
      }

      .terms-and-privacy {
        color: #1b347e;
      }

      .container {
        background-color: white;
        border: 1px solid;
        border-color:#9B9988;
        border-radius: 20px;
        height: 824px;
        left: 420px;
        position: absolute;
        top: 355px;
        width: 600px;
        align-items: center;
      }

      .welcome-banner {
        align-items: flex-start;
        background-image: url('assets/assets-png/logo-3.png');
        background-position: 50% 50%;
        background-size: contain;
        background-repeat: no-repeat;
        height: 209px;
        padding: 28px 72px;
      }

      .title {
        font-family: "ArialRoundedMTBoldRegular";
        font-weight: normal;
        color: #1b347e;
        letter-spacing: 0.75px;
        line-height: normal;
        text-align: center;
      }

      .login-part {
        align-items: center;
        min-height: 46px;
        top: 560px;
        width: 258px;
        /*display: flex;
        flex-direction: column;
        gap: 16px;
        left: 464px;
        position: absolute;
        */
      }

      .login {
        color: #9b998899;
        font-family: "ArialRoundedMTBoldRegular";
        font-size: 25px;
        font-weight: 400;
        letter-spacing: 0.75px;
        white-space: nowrap;
        /*
        line-height: normal;
        margin-right: 2.5px;
        min-height: 29px;
        min-width: 71px;
        
        */
      }

      .join-now .signup {
        display: flex;
        position: absolute;
        align-items: center;
      }

      .signup-part {
        align-items: center;
        margin-top: 225px;
        margin-left: 25%;
        width: 100%;
        align-self: center;
        top: 2%;
      }

      .sign-up-text {
        font-family: "ArialRoundedMTBoldRegular";
        font-size: 25px;
        font-weight: 400;
        letter-spacing: 0.75px;
        align-items: center;
        width: 100%;
        cursor: pointer;
        color: #9B9988;
      }

      .sign-up-text.active {
        color: #1b347e;
      }

      .login-bg {
        height: 1024px;
        left: 0;
        object-fit: cover;
        position: absolute;
        top: 47px;
        width: 100%;
      }
      
      .login-text {
        font-family: "ArialRoundedMTBoldRegular";
        font-size: 25px;
        font-weight: 400;
        letter-spacing: 0.75px;
        align-items: center;
        cursor: pointer;
        align-self: center;
        width: 20%;
        color: #9B9988;
      }

      .login-text.active {
        color: #1b347e;
      }
 
      /*
      label {
        font-family: "Poppins";
        display: block;
        margin-top: 10px;
        margin-left: 45px;
      }
      */

      input[type="text"],
      input[type="password"] {
        height: 3%;
        width: 80%;
        padding: 10px;
        margin-top: 25px;
        margin-bottom: 10px;
        margin-left: 45px;
        border: 1px solid #ccc;
        border-radius: 10px;
        font-size: 16px;
      }

      button {
        background-color: #1b347e;
        font-family: "Poppins";
        font-weight: bold;
        letter-spacing: 2px;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 10px;
        font-size: 20px;
        cursor: pointer;
        width: 84%;
        padding: 10px;
        margin-top: 25px;
        margin-bottom: 10px;
        margin-left: 45px;
      }
      button:hover {
        background-color: #0e2356;
      }

      .toggle-forms {
            display: flex;
            gap: 100px;
            width: 100%;
        }

        .form {
            position: absolute;
            width: 100%;
            transition: opacity 0.3s ease-in-out;
        }

        .login-form {
          opacity: 1;
        }

        .signup-form {
          opacity: 0;
          pointer-events: none;
        }


      .footer {
        align-items: flex-start;
        background-color: transparent;
        display: flex;
        flex-direction: row;
        flex-shrink: 1;
        height: 432px;
        justify-content: flex-start;
        margin-left: 2px;
        min-width: 1442px;
        width: auto;
      }

      .overlap-group-3 {
        align-items: flex-start;
        background-color: #21409a0f;
        display: flex;
        flex-direction: column;
        min-height: 432px;
        padding: 21px 101px;
        width: 1440px;
      }

      .group-34 {
        align-items: center;
        display: flex;
        gap: 231px; height: 277px;
        margin-top: 18px;
        min-width: 1237px;
      }

      .group-29 {
        align-items: flex-end;
        display: flex;
        flex-direction: column;
        gap: 14px;
        min-height: 277px;
        width: 317px;
      }

      .logo-3 {
        height: 135px;
        margin-right: 2px;
        object-fit: cover;
        width: 315px;
      }

      .unawa-translates-po {
        color: #333333;
        font-family: "Poppins";
        font-size: 21px;
        font-weight: 400;
        letter-spacing: 0;
        line-height: normal;
        margin-right: 2px;
        min-height: 128px;
        width: 301px;
      }

      .group-33 {
        align-items: flex-start;
        display: flex;
        height: 170px;
        margin-bottom: 7px;
        min-width: 689px;
      }

      .group-30 {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        gap: 28px;
        min-height: 170px;
        width: 115px;
      }

      .menu {
        font-family: "Poppins";
        font-weight: bold;
        font-size: 21px;
        letter-spacing: 0;
        line-height: normal;
        min-height: 32px;
      }

      .flex-container-14512 {
        font-family: "Poppins";
        height: 110px;
        width: 111px;
      }

      .flex-container {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        gap: 10px;
        position: relative;
      }

      .text {
        font-size: 20px;
        align-self: stretch;
        letter-spacing: 0;
        line-height: normal;
        position: relative;
      }

      .group-31 {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        gap: 28px;
        margin-left: 106px;
        min-height: 130px;
        width: 141px;
      }

      .features {
        font-family: "Poppins";
        font-weight: bold;
        font-size: 21px;
        letter-spacing: 0;
        line-height: normal;
        min-height: 32px;
      }

      .flex-container-14516 {
        height: 70px;
        width: 137px;
      }

      .group-32 {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        gap: 28px;
        margin-left: 107px;
        min-height: 170px;
        width: 224px;
      }

      .other {
        font-family: "Poppins";
        font-weight: bold;
        font-size: 21px;
        letter-spacing: 0;
        line-height: normal;
        min-height: 32px;
      }

      .flex-container-14518 {
        height: 110px;
        width: 220px;
      }

      .copyright-2023-una {
        align-self: center; color: #9b9988;
        font-family: "Poppins";
        font-size: 15px;
        font-weight: 400;
        letter-spacing: 0;
        line-height: normal;
        margin-top: 20px;
        min-height: 23px;
        width: 342px;
      }

            /*---------------ANIMATIONS---------------*/

      .nav-buttons .home:hover,
      .nav-buttons .fsl-translator:hover,
      .nav-buttons .learn:hover,
      .nav-buttons .about:hover,
      .nav-buttons .contact-us:hover {
        color: #ffcc00;
        font-weight: bolder;
      }

      .join-now-button:hover,
      .get-started-button:hover,
      .translation-try-now:hover {
        background-color: #1b347e;
        font-weight: bolder;
      }

      .add-sign-try-now:hover,
      .learn-now-button:hover {
        background-color: #eebe00;
        font-weight: bolder;
      }

      .elearn-try-now:hover,
      .read-more-button:hover {
        background-color: #aa1c2a;
        font-weight: bolder;
      }

      .submit-now:hover {
        color: #14255a;
        font-weight: bolder;
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

  // SIGN UP
  
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

    // LOGIN
  if (isset($_POST['login'])) {
    $loginEmail = $_POST['login-email'];
    $loginPassword = $_POST['login-password'];

    // Query the database to check if the user exists
    $query = "SELECT * FROM users WHERE email = '$loginEmail' AND password = '$loginPassword'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        // User authentication successful
        echo "<script>alert('Login successful. Welcome, $loginEmail!');</script>";
    } else {
        // User authentication failed
        echo "<script>alert('Login failed. Please check your email and password.');</script>";
    }
  }

  mysqli_close($connection);
    ?>

  <body>
    <div class="join-now screen">
      <div class="overlap-group8">
        <img class="login-bg" src="assets/assets-png/login-bg.png" />
    
        <!--NAV BAR -->

        <div class="overlap-group1">
          <div class="navbar">
            <div class="navbar-container"></div>
            <div class="nav-buttons">
              <a href="index.php" class="home">Home</a>
              <div class="fsl-translator">FSL Translator</div>
              <div class="learn-button">
                <div class="learn">Learn</div>
                <img
                  class="akar-iconschevron-down"
                  src="assets\assets-svg\akar-icons-chevron-down.svg"
                />
              </div>
              <div class="about">About</div>
              <div class="contact-us">Contact Us</div>
            </div>
            <a href="index.php">
              <img class="logo" src="assets\assets-png\logo.png" />
            </a>
          </div>
        </div>

      <!--FORMS-->

        <div class="container" id="form-container" style="height: 600px;">
          <div class="welcome-banner">
            <h1 class="title">Welcome to</h1>
          </div>
          <div class="signup-part signup">
            <div class="toggle-forms">
              <div class="login-text active" id="loginToggle" onclick="showLoginForm()">Log In</div>
              <div class="sign-up-text" id="signupToggle" onclick="showSignupForm()">Sign Up</div>
            </div>
          </div>
          <br>

          <!-- SIGN UP -->

          <form class="form signup-form" action="join.php" method="post">
            <input type="text" id="name" name="name" placeholder="Name" autocomplete="off" required />
            <input type="text" id="email" name="email" placeholder="Email" autocomplete="off" required />
            <input type="password" id="password" name="password" placeholder="Password" autocomplete="off" required />
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" autocomplete="off" required />
            <button type="submit" name="signup">SIGN UP</button>
            <p class="by-signing-up-you-a">
                <span>By singing up, you agree to unawa's <span class="terms-and-privacy"> Terms of Service </span> &amp; <span class="terms-and-privacy">Privacy Policy</span>.</span>
              </p>
          </form>
          
          <!-- LOGIN -->

          <form class="form login-form" action="join.php" method="post">
            <input type="text" id="login-email" name="login-email" placeholder="Email" required />
            <input type="password" id="login-password" name="login-password" placeholder="Password" required />
            <button type="submit" name="login">LOG IN</button>
          </form>
          
        </div>
      </div>
      <footer class="footer">
        <div class="overlap-group-3">
          <div class="group-34">
            <div class="group-29">
              <img class="logo-3" src="assets\assets-png\logo-3.png" />
              <p class="unawa-translates-po">
                UNAWA translates spoken and sign language, fostering inclusive
                communication with advanced technology.
              </p>
            </div>
            <div class="group-33">
              <div class="group-30">
                <div class="menu">MENU</div>
                <div class="flex-container-14512 flex-container">
                  <div class="text">
                    <span>Home</span>
                  </div>
                  <div class="text">
                    <span>About</span>
                  </div>
                  <div class="text">
                    <span>Contact Us</span>
                  </div>
                </div>
              </div>
              <div class="group-31">
                <div class="features">FEATURES</div>
                <div class="flex-container-14516 flex-container">
                  <div class="text">
                    <span>FSL Translator</span>
                  </div>
                  <div class="text">
                    <span>E-Learn</span>
                  </div>
                </div>
              </div>
              <div class="group-32">
                <div class="other">OTHER</div>
                <div class="flex-container-14518 flex-container">
                  <div class="text">
                    <span>Terms and Conditions</span>
                  </div>
                  <div class="text">
                    <span>Privacy Policy</span>
                  </div>
                  <div class="text">
                    <span>Help Center</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <img class="line-1" src="assets\assets-svg\line-1.svg" />
          <p class="copyright-2023-una">
            © Copyright 2023 unawa. All rights reserved.
          </p>
        </div>
      </footer>
</div>
  </body>

  <script>
  function showLoginForm() {
    const formContainer = document.getElementById('form-container');
  formContainer.style.height = '600px'; // Adjust the height as needed
    document.querySelector(".login-form").style.opacity = 1;
    document.querySelector(".signup-form").style.opacity = 0;
    document.querySelector(".login-form").style.pointerEvents = "auto";
    document.querySelector(".signup-form").style.pointerEvents = "none";

    // Toggle the active class for the "Log In" and "Sign Up" text
    document.getElementById('loginToggle').classList.add('active');
    document.getElementById('signupToggle').classList.remove('active');
  }

  function showSignupForm() {
    document.querySelector(".login-form").style.opacity = 0;
    document.querySelector(".signup-form").style.opacity = 1;
    document.querySelector(".login-form").style.pointerEvents = "none";
    document.querySelector(".signup-form").style.pointerEvents = "auto";

    // Toggle the active class for the "Log In" and "Sign Up" text
    document.getElementById('loginToggle').classList.remove('active');
    document.getElementById('signupToggle').classList.add('active');

    // Adjust the height of the container when the login form is shown
    const formContainer = document.getElementById('form-container');
    formContainer.style.height = '824px';
  }
  </script>

</html>
