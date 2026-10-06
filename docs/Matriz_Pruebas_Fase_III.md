# Matriz de pruebas — Fase III
**Proyecto:** Sistema Web de Gestión y Control de Inventario — Supermercado Yahweh  
**Estudiante:** Juan Esteban Mena Machuca  
**Año:** 2026

> Esta matriz contiene los 20 casos solicitados. La columna de estado distingue la verificación estática del código de las pruebas que requieren ejecución en XAMPP/navegador. No se inventan capturas, tiempos ni resultados dinámicos.

| ID | Caso | Tipo | Criterio | Estado |
|---|---|---|---|---|
| CP-01 | Login con credenciales válidas | Funcional | Acceso al panel | Requiere ejecución |
| CP-02 | Login con credenciales inválidas | Seguridad/Funcional | Mensaje y rechazo | Requiere ejecución |
| CP-03 | Usuario inactivo | Seguridad | No permitir acceso | Requiere ejecución |
| CP-04 | Crear categoría | Funcional | Registro correcto | Requiere ejecución |
| CP-05 | Editar categoría | Funcional | Actualización correcta | Requiere ejecución |
| CP-06 | Eliminar categoría | Funcional | Eliminación controlada | Requiere ejecución |
| CP-07 | Crear producto | Funcional | Registro correcto | Requiere ejecución |
| CP-08 | Editar producto | Funcional | Actualización correcta | Requiere ejecución |
| CP-09 | Eliminar producto | Funcional | Eliminación controlada | Requiere ejecución |
| CP-10 | Registrar entrada | Integración | Aumenta stock y crea movimiento | Requiere ejecución |
| CP-11 | Registrar salida | Integración | Reduce stock y crea movimiento | Requiere ejecución |
| CP-12 | Salida superior al stock | Seguridad/Funcional | Rechazo y stock íntegro | Código verificado; ejecutar |
| CP-13 | Cantidad cero/negativa | Funcional | Rechazo | Código verificado; ejecutar |
| CP-14 | Alerta de bajo stock | Funcional | Identificación cuando cantidad ≤ mínimo | Código verificado; ejecutar |
| CP-15 | Historial de movimientos | Funcional | Mostrar registros | Requiere ejecución |
| CP-16 | Reporte de inventario | Funcional | Datos y valoración | Requiere ejecución |
| CP-17 | Imprimir/guardar PDF | Usabilidad | `window.print()` disponible | Código verificado; ejecutar |
| CP-18 | Restricción por rol | Seguridad | Empleado sin funciones administrativas | Código verificado; ejecutar |
| CP-19 | Entrada maliciosa / XSS básico | Seguridad | Escapado de salida y consultas preparadas | Código verificado; ejecutar |
| CP-20 | Tiempo de respuesta < 3 s | Rendimiento | Consulta principal < 3 s | Requiere medición real |

## Evidencia técnica disponible
- Los 13 archivos PHP del proyecto pasan `php -l` sin errores.
- Se verificó uso de `password_hash()` y `password_verify()`.
- Se verificaron consultas preparadas en los módulos principales.
- Se verificó transacción para movimientos de inventario.
- Se verificó control de stock negativo.
- Se verificó control de acceso administrativo.
- Se verificó escape HTML mediante `htmlspecialchars()`.

Estas comprobaciones no sustituyen las pruebas dinámicas en navegador ni la medición real de tiempos.
