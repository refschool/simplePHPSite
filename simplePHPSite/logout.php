<?php
include_once('inc/session_header.php');
session_destroy();
header('Location: login.php');
