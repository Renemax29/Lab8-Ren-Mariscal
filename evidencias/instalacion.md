# Evidencia de instalación (Etapa 1)

- **Sistema operativo:** Windows 11
- **Paquete usado:** XAMPP
- **Versión de PHP:** 8.2.12
- **Servidor web:** Apache 2.4.58
- **Base de datos:** MariaDB 10.4.32
- **Puerto del servidor web:** 80
- **Ruta de instalación:** C:\xampp
- **Problema encontrado y cómo lo resolviste:**  Cuando escribí php -v en PowerShell me salió un error en rojo que decía que "php" no se reconocía como comando. Esto pasaba porque XAMPP sí había instalado PHP, pero Windows no sabía en qué carpeta buscarlo. Lo resolví agregando C:\xampp\php a la variable de entorno Path, cerré PowerShell y abrí uno nuevo. Al repetir php -v ya me mostró PHP 8.2.12.
