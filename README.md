# Sistema Web de Gestión y Control de Inventario — Supermercado Yahweh

MVP de la Fase II del proyecto de Ingeniería del Software 3.

## Datos académicos
- Estudiantes: Juan Esteban Mena Machuca-Andres Mauricio Restrepo
- Institución: Corporación Universitaria Remington
- Programa: Ingeniería de Sistemas
- Asignatura: Ingeniería del Software 3
- Docente: Marta Lucía Jiménez Torres
- Propietario: Edgar Mercado
- Año: 2026

## Tecnologías
PHP 8+, MySQL/MariaDB, HTML5, CSS3, JavaScript y Bootstrap 5.

## Funcionalidades
- Autenticación con sesiones y hashing.
- Roles de administrador y empleado.
- CRUD de productos y categorías.
- Registro de entradas y salidas.
- Actualización automática del inventario.
- Prevención de stock negativo.
- Identificación de bajo stock.
- Historial de movimientos.
- Reporte imprimible/guardable como PDF desde el navegador.
- Gestión de usuarios para administrador.

## Instalación con Composer
1. Abrir PowerShell dentro de la carpeta del proyecto.
2. Ejecutar `composer install`.
3. Composer verificará PHP 8.2 o superior y generará la carpeta `vendor/` con el autoloader.
4. No se requieren paquetes externos adicionales para este MVP.

## Instalación con XAMPP
1. Copiar la carpeta `supermercado-yahweh` en `C:\xampp\htdocs\`.
2. Iniciar Apache y MySQL.
3. Abrir phpMyAdmin.
4. Importar `database/supermercado_yahweh.sql`.
5. Revisar `config/config.php` si el usuario o contraseña de MySQL son diferentes.
6. Abrir `http://localhost/supermercado-yahweh/public/`.

## Usuarios de demostración
- Administrador: `admin` / `admin123`
- Empleado: `empleado` / `empleado123`

Cambiar las contraseñas en un entorno real.

## Estructura
- `config/`: conexión y configuración.
- `public/`: aplicación web.
- `database/`: dump MySQL.
- `screenshots/`: evidencias para la entrega.
- `README.md`: documentación.

## Fase II
El repositorio acompaña el Plan de Proyecto Ágil y el Plan de Pruebas Formal. Antes de entregar, agregar capturas reales de la ejecución en `screenshots/` y el enlace de este repositorio en el documento de Fase II.

## Nota de seguridad
Este MVP está orientado a desarrollo local y demostración académica. Para producción se requieren HTTPS, gestión segura de secretos, copias de seguridad, protección CSRF, controles de acceso más completos y configuración de servidor segura.

## Fase III — Aseguramiento de calidad
Se incluyen en `docs/` el manual técnico, manual de usuario, matriz de 20 casos de prueba,
criterios ISO/IEC 25000, checklist de cierre y evidencia de verificación estática del código.

**Importante:** las pruebas que dependen de Apache/MySQL y de interacción real en navegador deben ejecutarse en XAMPP y conservar capturas reales. No se presentan como ejecutadas cuando no existe evidencia de ejecución.
