<?php 
$stan = 25;
if ($stan >= 10) { 
    $komunikat = 'Duża dostępność';
}
if ($stan > 0 && $stan < 10) {
    $komunikat = 'Mała dostępność';
}
if ($stan == 0) {
    $komunikat = 'Brak towaru';
}
?>

