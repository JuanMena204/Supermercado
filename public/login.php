<?php
require_once __DIR__.'/../config/db.php';
if(is_logged_in()){header('Location: dashboard.php');exit;}
$error='';
if($_SERVER['REQUEST_METHOD']==='POST'){
 $usuario=trim($_POST['usuario']??'');$password=$_POST['password']??'';
 $s=db()->prepare('SELECT id_usuario,nombre,usuario,password,rol,estado FROM usuarios WHERE usuario=? LIMIT 1');$s->execute([$usuario]);$u=$s->fetch();
 if($u&&$u['estado']==='activo'&&password_verify($password,$u['password'])){unset($u['password']);$_SESSION['user']=$u;header('Location: dashboard.php');exit;}
 $error='Usuario o contraseña incorrectos.';
}
?><!doctype html><html lang="es"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Ingreso | Supermercado Yahweh</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"><link href="assets/css/style.css" rel="stylesheet"></head><body class="login-page"><div class="login-card"><h1>Supermercado Yahweh</h1><p class="text-muted">Sistema de gestión y control de inventario</p><?php if($error):?><div class="alert alert-danger"><?=e($error)?></div><?php endif;?><form method="post"><label class="form-label">Usuario</label><input class="form-control mb-3" name="usuario" required><label class="form-label">Contraseña</label><input class="form-control mb-4" type="password" name="password" required><button class="btn btn-primary w-100">Iniciar sesión</button></form><div class="demo-box mt-4">
