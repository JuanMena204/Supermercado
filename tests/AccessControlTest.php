<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AccessControlTest extends TestCase
{
    public function testLosModulosAdministrativosExigenRolAdministrador(): void
    {
        $root = dirname(__DIR__);

        foreach (['productos.php', 'categorias.php', 'usuarios.php'] as $file) {
            $source = file_get_contents($root . '/public/' . $file);
            $this->assertNotFalse($source, 'No fue posible leer el módulo ' . $file . '.');
            $this->assertStringContainsString(
                'require_admin();',
                $source,
                $file . ' debe exigir el rol de administrador.'
            );
        }
    }

    public function testLosModulosProtegidosExigenInicioDeSesion(): void
    {
        $root = dirname(__DIR__);

        foreach (['dashboard.php', 'movimientos.php', 'reportes.php'] as $file) {
            $source = file_get_contents($root . '/public/' . $file);
            $this->assertNotFalse($source, 'No fue posible leer el módulo ' . $file . '.');
            $this->assertStringContainsString(
                'require_login();',
                $source,
                $file . ' debe exigir autenticación.'
            );
        }
    }
}
