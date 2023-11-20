<?php
$imie='Karol';
$nazwisko='Piwowarski';
$personalia=$imie.' '.$nazwisko;
$pozdrowienie = 'Dzień dobry';                  	 // Początkowa wartość powitania
if ($imie) {                                   		  // Jeśli $imie ma wartość
    $pozdrowienie = 'Witaj ponownie, ' . $personalia;  // Utwórz spersonalizowane powitanie
}
$promocja=array(0,0.04,0.08,0.12,0.16,0.20,0.24,0.28,0.32,0.36);
$cena=array();
for($i = 0;$i <= 9 ; $i++){
    $cena[$i]=(1.92*($i+1))-($promocja[$i]);  
}
?>

<!DOCTYPE html>
<head>
	<title>Zmienne</title>
	<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">
</head>
<body>
    <div class="left">
    <?php include 'nagłówek.php'; ?>

    
	<p><?php echo $pozdrowienie;?></p>
	<h3>RABATY NA LIZAKI</h3>
    </div>

    <div class="clr"></div>
    <div >
        <table>
            <tr>
                <th>OPAKOWANIE</th>
                <th>CENA</th>
            </tr>
            <?php 
            print_r($cena);

            /* Array
            (
                [0] => opakowanie
                [1] => dwa
            ) 
            */
            ?>
        </table>
    </div>

    <div class="right">
    </div>
    
    <div class="clr"></div>
    <footer><?php include 'stopka.php'; ?></footer>
    
</body>
</html>