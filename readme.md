# Gestor de Notas "To Do"

Este es un simple gestor de notas "to do" desarrollado en PHP utilizando programación orientada a objetos (OOP).

## Descripción del Proyecto

El gestor de notas "to do" te permite crear, ver y actualizar notas "to do". Cada nota puede tener un título y un contenido asociado.

El proyecto está estructurado siguiendo los principios de OOP para mejorar la modularidad, la reutilización del código y la mantenibilidad.

## Características

- Crear nuevas notas "to do".
- Ver una lista de todas las notas existentes.
- Actualizar el título y el contenido de una nota existente.

## Estructura del Proyecto

El proyecto está organizado de la siguiente manera:

- **`src/`**: Contiene todo el código fuente del proyecto.
  - **`models/`**: Contiene las clases que representan los modelos de datos (por ejemplo, la clase `Note` para representar una nota).
  - **`views/`**: Contiene los archivos de plantillas para las vistas HTML.
  - **`lib/`**: Contiene el archivo de conexión con la db.
  - **`app.php`**: Archivo principal que inicializa la aplicación y maneja las rutas de las solicitudes.

- **`public/`**: Contiene los archivos públicos accesibles desde el navegador (por ejemplo, CSS, JavaScript).
- **`vendor/`**: Contiene las dependencias de terceros gestionadas mediante Composer.

## Requisitos del Sistema

- PHP >= 8.0
- Servidor web compatible con PHP (por ejemplo, Apache, Nginx)
- Composer para la gestión de dependencias

## Instalación

1. Clona este repositorio en tu máquina local:

   ```bash
   git clone https://github.com/sanrivarola/todo-php.git

2. Instala las dependencias utilizando Composer:

 composer install


3. Configura tu servidor web para apuntar al directorio public/ del proyecto.

4. Crea una base de datos y configura las credenciales de acceso en el archivo src/models/Database.php.

5. Importa la estructura de la base de datos utilizando el script SQL proporcionado.

¡Disfrutá de tu gestor de notas "to do"!

