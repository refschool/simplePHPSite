<?php
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 0); // Si tu es en HTTPS
ini_set('session.cookie_samesite', 'Strict');

session_start();
session_destroy();
header('Location: login.php');
