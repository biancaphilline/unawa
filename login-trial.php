<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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

      .box {
        background-color: white;
        display: flex;
        flex-direction: column;
        padding: 25px 24px;
        border-radius: 20px;
      }

      .form-box {
        background-color: white;
        border: 1px solid;
        border-color: #9b9988;
        border-radius: 20px;
        height: 824px;
        left: 420px;
        position: absolute;
        top: 355px;
        width: 600px;
        align-items: center;
      }

      .form-box header {
        font-family: "ArialRoundedMTBoldRegular";
        font-weight: normal;
        color: #1b347e;
        letter-spacing: 0.75px;
        line-height: normal;
        text-align: center;
      }

      .form-box .field {
        display: flex;
        margin-bottom: 10px;
        flex-direction: column;
      }

      .form-box form .input input {
        height: 40px;
        width: 100%;
        font-size: 16px;
        padding: 0 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        outline: none;
      }

      .btn {
        height: 35px;
        background: #1b347e;
        border: 0;
        border-radius: 5px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        transition: all 0.3s;
        margin-top: 10px;
        padding: 0px 10px;
      }

      .btn :hover {
        opacity: 0.82;
      }

      .submit {
        width: 100%;
      }

      .links {
        margin-bottom: 15px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="box form-box">
        <header>Welcome to</header>
        <form action="" method="post">
          <div class="field input">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required />
          </div>

          <div class="field input">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" required />
          </div>

          <div class="field">
            <input
              type="submit"
              class="btn"
              name="submit"
              value="Login"
              required
            />
          </div>
          <div class="links">
            Don't have account? <a href="register-trial.php">Sign Up</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
