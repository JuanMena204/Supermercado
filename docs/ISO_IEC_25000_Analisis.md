# Análisis ISO/IEC 25000 — Fase III

| Característica | Evidencia del sistema | Métrica / criterio | Situación |
|---|---|---|---|
| Adecuación funcional | CRUD, movimientos, reportes, usuarios | Casos aprobados / ejecutados × 100 | Requiere ejecución |
| Eficiencia de desempeño | Consultas y paneles PHP/PDO | Tiempo de respuesta < 3 s | Requiere medición |
| Usabilidad | Navegación, formularios, botón regresar | Incidencias de navegación | Requiere prueba con usuario |
| Fiabilidad | Transacción de movimientos y control de stock | Operaciones fallidas / operaciones ejecutadas | Requiere ejecución |
| Seguridad | Sesiones, roles, hashing, PDO preparado | Intentos no autorizados / controles aprobados | Parte verificada en código |
| Mantenibilidad | Separación config/public/database/docs | Defectos y facilidad de corrección | Verificación estructural |

## Criterios de la Fase III
- Disponibilidad objetivo: 99,5 % durante la jornada de trabajo.
- Consultas principales: menos de 3 segundos.
- Credenciales: hashing seguro.

Los valores anteriores son criterios/objetivos del proyecto. No deben presentarse como mediciones logradas hasta ejecutar y registrar la evidencia correspondiente.
