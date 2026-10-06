<?php require_once __DIR__.'/../config/config.php';require_login();?><!doctype html><html lang="es"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title><?=e($title??APP_NAME)?></title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"><link href="assets/css/style.css" rel="stylesheet"></head><body><nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm"><div class="container-fluid"><a class="navbar-brand fw-bold" href="dashboard.php">Supermercado Yahweh</a><div class="d-flex align-items-center gap-3 text-white"><span><?=e($_SESSION['user']['nombre'])?> · <?=e($_SESSION['user']['rol'])?></span><a class="btn btn-light btn-sm" href="logout.php">Salir</a></div></div></nav><div class="container py-4">
<div class="mb-3">
<?php if (($title ?? '') === 'Panel principal'): ?>
<span class="text-muted small">Inicio</span>
<?php else: ?>
<a href="dashboard.php" class="btn btn-outline-secondary">
← Regresar al panel principal
</a>
<?php endif; ?>
</div>
