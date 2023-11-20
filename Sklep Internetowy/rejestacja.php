<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <img src="1.jpg" width="500" height="500" style="float:left;margin-left: 10px;">
  <img src="2.jpg" width="500" height="500" style="float:right;margin-right: 10px;">
  <style>
    body {
      font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      max-width: 200vh;
      background: rgb(63, 94, 251);
      background: radial-gradient(circle, rgba(63, 94, 251, 1) 0%, rgba(252, 70, 107, 1) 100%);
    }

    .logowanie {
      margin: auto;
      width: 200px;
      border: 1px solid powderblue;
      border-radius: 5px;
      box-shadow: 1px 1px 5\ px black;
      background-color: white;
      padding: 20px;
    }
  </style>

  <div class="logowanie">

    <h1>Login</h1>

    <form method="post" action="login.php">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Login">
    </form>
    <p id="login-message"><?php echo $loginMessage; ?></p>

    <a href="index.html">Powrót</a>
  </div>

  <img src="3.jpg" width="500" height="500" style="margin: auto;">
  <video width="320" height="240" controls>
    <source src="Arabic meme.mp4" type="video/mp4">

    <script>
    // Check if the login message exists and display "Zalogowano Pomyslnie" if it does
    var loginMessage = document.getElementById("login-message");
    if (loginMessage.textContent === "Logged in successfully") {
      loginMessage.style.color = "black";
      loginMessage.textContent = "Zalogowano Pomyslnie";
    }
  </script>

</body>

</html>