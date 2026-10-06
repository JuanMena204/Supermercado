<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SecurityTest extends TestCase
{
    private string $root;

    protected function setUp(): void
    {
        $this->root = dirname(__DIR__);
    }

    public function testLasContrasenasPuedenGenerarseYVerificarse(): void
    {
        $contrasena = 'ClaveSegura123!';
        $hash = password_hash($contrasena, PASSWORD_DEFAULT);

        $this->assertNotSame($contrasena, $hash, 'La contraseña no debe almacenarse en texto plano.');
        $this->assertTrue(password_verify($contrasena, $hash), 'La contraseña correcta debe ser verificada.');
        $this->assertFalse(password_verify('ClaveIncorrecta', $hash), 'Una contraseña incorrecta debe ser rechazada.');
    }

    public function testElInicioDeSesionUsaVerificacionDeContrasena(): void
    {
        $source = file_get_contents($this->root . '/public/login.php');

        $this->assertNotFalse($source, 'No fue posible leer el archivo de inicio de sesión.');
        $this->assertStringContainsString('password_verify(', $source, 'El inicio de sesión debe utilizar password_verify().');
        $this->assertStringContainsString('prepare(', $source, 'El inicio de sesión debe utilizar consultas preparadas.');
    }

    public function testLaCreacionDeUsuariosUsaHashDeContrasena(): void
    {
        $source = file_get_contents($this->root . '/public/usuarios.php');

        $this->assertNotFalse($source, 'No fue posible leer el archivo de usuarios.');
        $this->assertStringContainsString('password_hash(', $source, 'La creación de usuarios debe utilizar password_hash().');
        $this->assertStringContainsString('prepare(', $source, 'La creación de usuarios debe utilizar consultas preparadas.');
    }
}
