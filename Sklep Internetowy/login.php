<?php
session_start();

// Check if user is already logged in
if(isset($_SESSION['username'])) {
  header("Location: index.html");
  exit;
}

// Check if the form is submitted
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Validate the form data
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Connect to the database
  $conn = new mysqli('localhost', 'root', '', 'login');

  // Check connection
  if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare the SQL statement
  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();

  // Check if a row is returned
  $result = $stmt->get_result();
  if($result->num_rows === 1) {
    // Valid login, set session variables
    $_SESSION['username'] = $username;
    header("Location: index.html");
    exit;
  } else {
    $error = "Invalid username or password";
  }

  // Close statement and connection
  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
    .container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background: #f5f5f5;
  border: 1px solid #ddd;
  border-radius: 5px;
}

h2 {
  text-align: center;
}

.form-group {
  margin-bottom: 10px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 5px;
  font-size: 16px;
}

button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 16px;
  background: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.error {
  color: red;
  margin-bottom: 10px;
}

</style>

<body>
  <div class="container">
    <h2>Login</h2>
    <?php if(isset($error)) { ?>
      <div class="error"><?php echo $error; ?></div>
    <?php } ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
