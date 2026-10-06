<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ConfigTest extends TestCase
{
    protected function setUp(): void
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        $_SESSION = [];
        require_once __DIR__ . '/../config/config.php';
    }

    public function testElNombreDeLaAplicacionEstaDefinido(): void
    {
        $this->assertSame(
            'Supermercado Yahweh',
            APP_NAME,
            'El nombre de la aplicación debe ser "Supermercado Yahweh".'
        );
    }

    public function testLaFuncionDeEscapeProtegeLosCaracteresHtml(): void
    {
        $resultado = e('<script>alert("x")</script>');

        $this->assertSame(
            '&lt;script&gt;alert(&quot;x&quot;)&lt;/script&gt;',
            $resultado,
            'Los caracteres HTML especiales deben escaparse correctamente.'
        );
    }

    public function testLaSesionInicialmenteNoEstaAutenticada(): void
    {
        unset($_SESSION['user']);

        $this->assertFalse(
            is_logged_in(),
            'La sesión no debe considerarse autenticada cuando no existe un usuario.'
        );
    }

    public function testLaSesionSeAutenticaCuandoExisteUnUsuario(): void
    {
        $_SESSION['user'] = [
            'id_usuario' => 1,
            'nombre' => 'Administrador',
            'usuario' => 'admin',
            'rol' => 'administrador',
        ];

        $this->assertTrue(
            is_logged_in(),
            'La sesión debe considerarse autenticada cuando existe un usuario.'
        );
    }
}
