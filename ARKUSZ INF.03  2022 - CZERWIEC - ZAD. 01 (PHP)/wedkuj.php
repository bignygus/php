<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl_1.css">
    <title>Wędkowanie</title>
</head>
<body>
    <div class="banner">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div class="left">
        <div class="left1">
            <h3>Ryby zamieszkujące rzeki</h3>
            <ol>
                <?php 
                $s = "localhost";
                $l = "root";
                $p = "";
                $db = "wendkowanie";

                $conn = mysqli_connect($s,$l,$p,$db);
                
                $sql = "SELECT r.nazwa, l.akwen, l.wojewodztwo FROM `ryby` r LEFT JOIN `lowisko` l ON r.id = l.Ryby_id WHERE l.rodzaj = 3;";
                $result = mysqli_query($conn,$sql);
                
                while($row = mysqli_fetch_array($result)){
                    echo("<li>".$row["nazwa"]." pływa w rzece ".$row["akwen"].", ".$row["wojewodztwo"]."</li>");
                }
                
                ?>
            </ol>
        </div>
        <div class="left2">
            <h3>Ryby drapieżne naszych wód</h3>
            <table>
                <tr>
                    <th>L.p.</th>
                    <th>Gatunek</th>
                    <th>Występowanie</th>
                </tr>
                <?php 
                $sql = "SELECT id, nazwa, wystepowanie FROM `ryby` WHERE styl_zycia = 1;";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($result)){
                    echo("<tr><td>".$row["id"]."</td><td>".$row["nazwa"]."</td><td>".$row["wystepowanie"]."</td>");
                }
                $conn->close();
                ?>
            </table>
        </div>
    </div>
    <div class="right">
        <img src="ryba1.jpg" alt="Sum"><br>
        <a href="kwerendy.txt" download>Pobierz kwerendy</a>
    </div>
    <div class="clr">&nbsp;</div>
    <div class="footer">
        <p>Stronę wykonał: 0000000000000000</p>
    </div>

</body>
</html>