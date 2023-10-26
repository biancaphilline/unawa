<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Sign-up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            position: relative;
            margin-top: 50px;
        }

        .toggle-forms {
            display: flex;
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
            pointer-events: none; /* Disable interactions with the hidden form */
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }

        button {
            background-color: #007BFF;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="toggle-forms">
            <button onclick="showLoginForm()">Login</button>
            <button onclick="showSignupForm()">Sign Up</button>
        </div>
        <form class="form login-form">
            <h2>Login</h2>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <form class="form signup-form">
            <h2>Sign Up</h2>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>

    <script>
        function showLoginForm() {
            document.querySelector(".login-form").style.opacity = 1;
            document.querySelector(".signup-form").style.opacity = 0;
            document.querySelector(".signup-form").style.pointerEvents = "none";
        }

        function showSignupForm() {
            document.querySelector(".login-form").style.opacity = 0;
            document.querySelector(".signup-form").style.opacity = 1;
            document.querySelector(".login-form").style.pointerEvents = "none";
        }
    </script>
</body>
</html>
