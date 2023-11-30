<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia</title>
    <link rel="stylesheet" href="przychodnia.css">
</head>

<body>
    <div id="baner">
        <h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
    </div>

    <div id="panel-lewy">
        <h3>LISTA PACJENTÓW</h3>
        <?php
        $serwer = "localhost";
        $login = "root";
        $pass = "";
        $db = "przychodnia";

        $conn = mysqli_connect($serwer, $login, $pass, $db);
        if (mysqli_connect_errno()) {
            die("" . mysqli_connect_error());
        }

        $sql = "SELECT id, imie, nazwisko FROM `pacjenci`;";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo ($row["id"] . ". " . $row["imie"] . " " . $row["nazwisko"] . "<br>");
            }
        }
        ?>

        <br><br>

        <form action="pacjent.php" method="post">
            Podaj id: <br><input type="number" name="patient_id" required>
            <input type="submit" value="Pokaż dane">
        </form>

        <h3>LEKARZE</h3>
        <ul>
            <li>pn – śr
                <ol>
                    <li>Anna Kwiatkowska</li>
                    <li>Jan kowalewski</li>
                </ol>
            </li>
            <li>czw – pt
                <ol>
                    <li>Krzysztof Nowak</li>
                </ol>
            </li>
        </ul>
    </div>

    <div id="panel-prawy">
        <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
        <?php
        $sql = "SELECT imie, nazwisko, choroby_przewlekle, uczulenia FROM `pacjenci` WHERE id = ".$_POST["patient_id"].";";

        $result = mysqli_query($conn, $sql);
        
        while ($row = mysqli_fetch_array($result)) {
            echo("<p>Imie i nazwisko: ".$row["imie"]." ". $row["nazwisko"]."</p>"
                ."<p>Choroby przewlekłe: ".$row["choroby_przewlekle"]."</p>"
                ."<p>Uczlenia: ".$row["uczulenia"]."</p>");
        }
        
        $conn->close();
        ?>

    </div>

    <div class="clr">&nbsp;</div>

    <footer>
        <p>utworzone przez: Twój numer PESEL</p>
        <a href="kwerendy.txt" download>Pobierz plik z kwerendami</a>
    </footer>

</body>

</html>