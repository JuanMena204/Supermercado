# Manual técnico — Supermercado Yahweh

## 1. Requisitos
- Windows.
- XAMPP.
- Apache activo.
- MySQL/MariaDB activo.
- PHP 8.x.
- Navegador web.

## 2. Instalación
1. Descomprimir la carpeta `supermercado-yahweh` dentro de `C:\xampp\htdocs\`.
2. Iniciar Apache y MySQL desde XAMPP.
3. Abrir phpMyAdmin.
4. Importar `database/supermercado_yahweh.sql`.
5. Verificar `config/config.php`: host `localhost`, base `supermercado_yahweh`, usuario `root` y contraseña vacía en el entorno local estándar.
6. Abrir `http://localhost/supermercado-yahweh/public/`.

## 3. Arquitectura
- `config/`: configuración y conexión PDO.
- `public/`: interfaz y controladores PHP del MVP.
- `public/assets/`: CSS y JavaScript.
- `database/`: script de creación y datos de demostración.
- `docs/`: documentación de Fase III.
- `screenshots/`: espacio para capturas reales.

## 4. Base de datos
Tablas principales: `usuarios`, `categorias`, `proveedores`, `productos` y `movimientos_inventario`.

## 5. Seguridad implementada
- Contraseñas almacenadas mediante `password_hash()`.
- Validación mediante `password_verify()`.
- Consultas preparadas con PDO.
- Control de sesión.
- Restricción de módulos administrativos mediante `require_admin()`.
- Escape de salida HTML mediante `htmlspecialchars()`.
- Transacción para actualizar stock y registrar el movimiento.

## 6. Mantenimiento
Para cambiar credenciales o parámetros locales, modificar `config/config.php`. Para ampliar funcionalidades, mantener separación entre configuración, interfaz, base de datos y documentación.

## 7. Verificación
Ejecutar la matriz `docs/Matriz_Pruebas_Fase_III.md` en XAMPP y anexar capturas reales, fecha, resultado y tiempo medido para cada caso aplicable.
