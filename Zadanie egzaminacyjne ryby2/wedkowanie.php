<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Klub wędkowania</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="baner"><h2>Wędkuj z nami!</h2></div>
    <div class="lewy"><img src="ryba2.jpg" alt="Szczupak"></div>
    <div class="prawa">
        <h3>Ryby spokojnego żeru (białe)</h3>
        <?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'wedkowanie';
        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error) {
            die("<script type='text/javascript'>alert('".connect_error."');</script>");
        }
        else{
            echo "<script type='text/javascript'>alert('Połączenie działa');</script>";
        }

        $sql = "SELECT id, nazwa, wystepowanie FROM `ryby` WHERE styl_zycia = 2";
        if($result = $conn->query($sql)) {

            while($row = $result->fetch_array()) {
                echo $row['id'].". ".$row['nazwa'].", występuje w: ".$row['wystepowanie']."<br>";
            } 

        }
        else {
            echo "Błąd zapytania";
        }       

        $conn->close();
        ?>

        <ol>
            <li><a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a></li>
            <li><a href="http://www.pzw.org.pl/" target="_blank">Polski Związek Wędkarski</a></li>
        </ol>
        
        
    </div>
    <div class="clr"></div>
    <div class="stopka"><p>Stronę wykonał: 000000000</p></div>

</body>
</html>