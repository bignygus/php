<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Dziennik szkolny</title>
	
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <link rel="stylesheet" href="main.css">

</head>

<body>
    <form action="index.php" method="post">
        <label>
            Podaj nazwę klasy: <input type="text" name="klasa">
        </label>
        <input type="submit" value="Poka ocene">
    </form>
<?php
    if(isset($_POST["klasa"]))
    {
        if(empty($_POST["klasa"])){
            echo '<span style="color:yellow;">UUH</span>';
        }
        else{
            require_once("dbconnect.php");
            $conn = mysqli_connect($host, $user, $pass, $db);
            mysqli_set_charset($conn,"utf8");
            if(!$conn){
                echo"Błąd";
                exit();
            }

            $klasa = $_POST["klasa"];
            $sql = "SELECT imie, nazwisko, Srednia_ocen FROM uczen, klasa WHERE nazwa='$klasa' AND klasa.id = uczen.id_klasy";
            $result = mysqli_query($conn, $sql) or die("El problemo");
            if(mysqli_num_rows($result) > 0){
echo<<<END
<table>
    <thead>
        <tr>
            <th></th>
        </tr>
    </thead>
</table>
END

                while($row = mysqli_fetch_assoc($result)){
                    echo $row['imie']."<br>";
                }
            }
            else{
                echo '<span style="color: red;">Nie ma takiej klasy</span>';
            }
	        mysqli_close( $conn );
        }
       
    }
?>

</body>
</html>