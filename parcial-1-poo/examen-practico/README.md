# Sistema POO - Examen Práctico

## Que hace este proyecto

Un sistema simple que maneja usuarios con clases en PHP. Usa herencia y valida correos electronicos.

## Archivos del proyecto

- **clases/Usuario.php** - Clase principal
- **clases/Admin.php** - Para administradores  
- **clases/Alumno.php** - Para alumnos con matricula
- **index.php** - Pagina que muestra todo

## Que hacen las clases

La clase Usuario guarda nombre y correo. Si el correo esta mal, manda error.

La clase Admin es un Usuario que tiene rol de "Administrador".

La clase Alumno es un Usuario con matricula y rol de "Alumno".

## Como usar

1. Pon los archivos en htdocs
2. Prende Apache


## Que se ve

Una tabla con los usuarios que se crearon bien y mensajes de error si algo falla.

---

Practica de POO - Luz Salas