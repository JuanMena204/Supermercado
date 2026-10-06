<?php
define('APP_NAME', 'Supermercado Yahweh');
define('DB_HOST', 'localhost');
define('DB_NAME', 'supermercado_yahweh');
define('DB_USER', 'root');
define('DB_PASS', '');
date_default_timezone_set('America/Bogota');
session_start();
function e($value){return htmlspecialchars((string)$value,ENT_QUOTES,'UTF-8');}
function is_logged_in(){return isset($_SESSION['user']);}
function require_login(){if(!is_logged_in()){header('Location: login.php');exit;}}
function require_admin(){require_login();if($_SESSION['user']['rol']!=='administrador'){http_response_code(403);exit('Acceso no autorizado.');}}
