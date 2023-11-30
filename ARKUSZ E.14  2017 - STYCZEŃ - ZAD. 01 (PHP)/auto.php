<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="auto.css">
    <title>Komis Samochodowy</title>
</head>

<body>

    <div class="baner">
        <h1>SAMOCHODY</h1>
    </div>
    <div class="lewy">
        <h2>Wykaz Samochodów</h2>
        <ul>
            <?php
            $s = "localhost";
            $l = "root";
            $p = "";
            $db = "komis";

            $conn = new mysqli($s, $l, $p, $db);

            $sql = "SELECT id, marka, model FROM `samochody`;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo ("<li>" . $row["id"] . " " . $row["marka"] . " " . $row["model"] . "</li>");
                }
            }
            ?>
        </ul>

        <h2>Zamówienia</h2>
        <ul>
            <?php
            $sql = "SELECT Samochody_id, Klient FROM `zamowienia`;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_array()) {
                    echo ("<li>" . $row["Samochody_id"] . " " . $row["Klient"] . "</li>");
                }
            }
            ?>
        </ul>
    </div>
    <div class="prawy">
        <h2>Pełne dane: Fiat</h2>
        <?php
        $sql = "SELECT * FROM `samochody` WHERE marka = 'Fiat';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo(implode(" / ", $row));
                echo"<br>";
                //echo("<li>".$row["id"]." / ".$row["marka"]." / ".$row["model"]." / ".$row["rocznik"]." / ".$row["kolor"]." / ".$row["stan"]."</li>");
            }
        }
        ?>
    </div>
    <div class="clr">&nbsp;</div>
    <div class="stopka">
        <table>
            <tr>
                <td><a href="kwerendy.txt" download>Kwerendy</a></td>
                <td>Autor: 00000000000000</td>
                <td><img src="auto.png" alt="komis samochodowy"></td>
            </tr>
        </table>
    </div>

</body>

</html>