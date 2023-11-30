<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kapec";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];

    $sql = "INSERT INTO dane (imie, nazwisko, email) VALUES ('$name', '$surname', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Zostałeś dodany do bazy";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formularz PHP</title>
</head>

<body>

    <h2>Formularz PHP</h2>

    <form method="post">
        <label for="name">Imię:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="surname">Nazwisko:</label>
        <input type="text" id="surname" name="surname" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <input type="submit" value="Wyślij" name="submit">
    </form>

</body>

</html>