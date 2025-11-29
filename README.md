# sistema-stock-elvisa
Sistema Web de Gestión de Stock para la empresa ELVISA (Trabajo Práctico Universitario)
Este proyecto tiene como objetivo desarrollar un sistema web interno para la gestión de stock de materiales eléctricos utilizados por la empresa ELVISA. El sistema permite administrar productos, registrar ingresos y egresos de mercadería, consultar movimientos históricos y mantener información actualizada para mejorar los procesos internos de la empresa.

Objetivos del Proyecto
•	Optimizar el control de inventario.
•	Reducir errores y registros duplicados.
•	Unificar la información de stock en una única plataforma.
•	Facilitar consultas y decisiones operativas basadas en datos reales.
•	Implementar un sistema simple, rápido y funcional que pueda usarse dentro de la red local de la empresa.
Estado del Proyecto
Actualmente, el proyecto se encuentra en aproximadamente un 60 % de avance, con:
•	Definición de requerimientos funcionales y no funcionales.
•	Análisis de necesidades y diseño del sistema.
•	Diagramas de flujo correspondientes a los procesos principales.
•	Estructura inicial del sistema implementada.
•	Base del proyecto subida a GitHub para control de versiones.

Tecnologías utilizadas
•	PHP – Lenguaje principal para el backend.
•	MySQL – Base de datos del sistema.
•	HTML/CSS/Bootstrap – Para la interfaz de usuario.
•	XAMPP/LAMPP – Entorno de desarrollo recomendado.
•	Git/GitHub – Control de versiones y seguimiento del proyecto.

Estructura del Proyecto
sistema-stock-elvisa/
│   index.php
│   conexion.php
│
├── productos/
│      agregar.php
│      editar.php
│      listar.php
│
├── movimientos/
│      ingreso.php
│      egreso.php
│      historial.php
│
└── usuarios/
       login.php
       logout.php
       validar.php

Funciones Principales
✔️ Gestión de Productos
•	Alta de nuevos productos
•	Edición y baja lógica
•	Consulta y listado por categorías
✔️ Gestión de Stock
•	Ingreso de materiales
•	Egreso con validación de stock disponible
•	Actualización automática del inventario
✔️ Registro de Movimientos
•	Historial completo de ingresos y egresos
•	Registro de fecha, usuario y tipo de movimiento
✔️ Control de Acceso
•	Sistema de login
•	Roles: administrador y operador

Instalación y uso
1.	Clonar el repositorio:
2.	git clone https://github.com/davidalvarezar/sistema-stock-elvisa
3.	Importar la base de datos (archivo .sql si corresponde).
4.	Configurar la conexión en conexion.php.
5.	Ejecutar el proyecto desde el servidor local (XAMPP/LAMPP).
6.	Acceder a http://localhost/sistema-stock-elvisa.

## Próximos pasos
•	Implementar interfaz completa en Bootstrap.
•	Finalizar todos los módulos internos.
•	Agregar alertas y validaciones adicionales.
•	Realizar pruebas funcionales y de usuario.
•	Documentar mantenimiento y manual de uso.

## Licencia
Proyecto académico y de uso interno para ELVISA.
No se autoriza su distribución o uso externo sin permiso previo.

