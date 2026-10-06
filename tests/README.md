# Pruebas PHPUnit - Supermercado Yahweh

Las pruebas y sus mensajes están redactados en español para facilitar la presentación académica del proyecto.

## Archivos

- `ConfigTest.php`: configuración, sesión y escape de HTML.
- `SecurityTest.php`: hash/verificación de contraseñas y consultas preparadas.
- `InventoryRulesTest.php`: reglas de inventario, transacciones, cantidades y bajo stock.
- `AccessControlTest.php`: autenticación y control de acceso por rol.

## Ejecución en PowerShell

Desde la carpeta raíz del proyecto:

```powershell
cd C:\xampp\htdocs\Supermercado
.\vendor\bin\phpunit.bat --testdox
```

Para ejecutar únicamente la carpeta de pruebas:

```powershell
.\vendor\bin\phpunit.bat tests --testdox
```

Los nombres de las pruebas y los mensajes de error están en español. No se deben registrar resultados como "PASÓ" hasta ejecutar PHPUnit en el equipo donde está instalado PHP con las extensiones requeridas.
