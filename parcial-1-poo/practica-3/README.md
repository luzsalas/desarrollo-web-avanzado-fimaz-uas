# Práctica 3 - Manejo de Excepciones en PHP

## Descripción del Sistema

Sistema de usuarios que valida el formato del correo electrónico y lanza excepciones cuando el dato es incorrecto.


## Validación

La clase Usuario valida el correo con filter_var():
- Si es válido → crea el objeto
- Si es inválido → lanza Exception

El código usa try/catch para capturar errores sin detener el programa.

## Estructura

```
practica-3/
 clases/
  suario.php
  Admin.php
  Alumno.php
index.php
README.md
```

## Ejecutar

1. Copia a htdocs
2. Inicia Apache
3. Abre: http://localhost/

## Evidencia de Manejo de Errores




## Conceptos POO

Herencia con extends` 
Validación de datos  
Manejo de errores con try/catch 
Encapsulamiento