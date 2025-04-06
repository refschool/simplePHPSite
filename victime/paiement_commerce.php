<?php
ini_set('session.cookie_samesite', 'None');
ini_set('session.cookie_secure', 'true');
session_start();
echo "c'est payé pour <br>";
print_r($_SESSION['panier']);
