<?php
  include("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");

  $account = new Account($con);

  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php");

  function getInputValue($name) {
    if(isset($_POST[$name])) {
      echo $_POST[$name];
    }
  }

?>

<html>
  <head>
    <title>Welcome to Slotify!</title>

    <link rel="stylesheet" type="type/css" href="assets/css/register.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
  </head>

  <body>

    <?php if(isset($_POST['registerButton'])) : ?>
      <script>
        $(document).ready(() => {
          $("#loginForm").hide();
          $("#registerForm").show();
        });
      </script>
    <?php else: ?>
      <script>
        $(document).ready(() => {
          $("#loginForm").show();
          $("#registerForm").hide();
        });
      </script>
    <?php endif; ?>

    <div id="background">

      <div id="loginContainer">

        <div id="inputContainer">
          <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
              <span class="errorMessage"><?= $account->getError(Constants::$loginFailed); ?></span>
              <lable for="loginUsername">Username</lable>
              <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" value="<?php getInputValue('username') ?>" required>
            </p>

            <p>
              <label for="loginPassword">Password</lable>
              <input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
            </p>

            <button type="submit" name="loginButton">LOG IN</button>

            <div class="hasAccountText">
              <span id="hideLogin">Don't have an account yet? Sign up here.</span>
            </div>

          </form>

          <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
              <span class="errorMessage"><?= $account->getError(Constants::$usernameCharacters); ?></span>
              <span class="errorMessage"><?= $account->getError(Constants::$usernameTaken); ?></span>
              <lable for="registerUsername">Username</lable>
              <input id="registerUsername" name="registerUsername" type="text" placeholder="e.g. bartSimpson" value="<?php getInputValue('username') ?>" required>
            </p>

            <p>
              <span class="errorMessage"><?= $account->getError(Constants::$firstNameCharacters); ?></span>
              <lable for="firstName">First Name</lable>
              <input id="firstName" name="firstName" type="text" placeholder="e.g. Bart" value="<?php getInputValue('firstName') ?>" required>
            </p>

            <p>
              <?= $account->getError(Constants::$lastNameCharacters); ?>
              <lable for="lastName">Last Name</lable>
              <input id="lastNname" name="lastName" type="text" placeholder="e.g. Simpson" value="<?php getInputValue('lastName') ?>" required>
            </p>

            <p>
              <span class="errorMessage"><?= $account->getError(Constants::$emailsDoNotMatch); ?></span>
              <span class="errorMessage"><?= $account->getError(Constants::$emailInvalid); ?></span>
              <span class="errorMessage"><?= $account->getError(Constants::$emailTaken); ?></span>
              <lable for="email">Email</lable>
              <input id="email" name="email" type="email" placeholder="e.g. bart@gmail.com" value="<?php getInputValue('email') ?>" required>
            </p>
        
            <p>
              <lable for="email2">Confirm email</lable>
              <input id="email2" name="email2" type="email" placeholder="e.g. bart@gmail.com" value="<?php getInputValue('email2') ?>" required>
            </p>

            <p>
              <span class="errorMessage"><?= $account->getError(Constants::$passwordsDoNotMatch); ?></span>
              <span class="errorMessage"><?= $account->getError(Constants::$passwordNotAlphanumeric); ?></span>
              <span class="errorMessage"><?= $account->getError(Constants::$passwordCharacters); ?></span>
              <label for="registerPassword">Password</lable>
              <input id="registerPassword" name="registerPassword" type="password" placeholder="Your password" required>
            </p>

            <p>
              <label for="password2">Confirm password</lable>
              <input id="password2" name="password2" type="password" placeholder="Your password" required>
            </p>

            <button type="submit" name="registerButton">SIGN UP</button>

            <div class="hasAccountText">
              <span id="hideRegister">Already have an account? Log in here.</span>
            </div>

          </form>

        </div>

        <div id="loginText">
          <h1>Get great music, right now</h1>
          <h2>Listen to loads of songs for free</h2>
          <ul>
            <li>Discover music you'll fall in love with</li>
            <li>Create your own playlists</li>
            <li>Follow artists to keep up to date</li>
          </ul>
        </div>

      </div>
    </div>
  </body>
</html>