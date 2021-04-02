<?php
// Hier moet je de cookie aanmaken/aanropen en de get request naar home mag weg
if(!isset($_COOKIE['colorscheme'])) {
    setcookie('colorscheme', '1'/** default value van de color scheme */, time() + (86400 * 30), "/"); // 86400 = 1 day
} 

if(!isset($_COOKIE['lang'])) {
    setcookie('lang', '1'/** default value van de taal */, time() + (86400 * 30), "/"); // 86400 = 1 day
} 

header("Location: home.php");
exit();
?>
