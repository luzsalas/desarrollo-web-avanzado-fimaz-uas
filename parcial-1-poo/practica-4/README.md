# Practica 4 - Sistema POO con Excepciones

## Objetivo

Crear un sistema POO en PHP con herencia, polimorfismo, validacion de datos y manejo de excepciones.

## Requisitos

- PHP 8 o superior
- XAMPP
- Navegador web

## Estructura

```
practica-4/
 clases/
  Usuario.php
  Admin.php
  Alumno.php
  Invitado.php
├── index.php
└── README.md
```

## Clases

**Usuario** - Clase base con validacion de correo
- Atributos: nombre, correo
- Valida correo con filter_var()
- Lanza excepcion si el correo es invalido

**Admin** - Hereda de Usuario
- Metodo getRol() retorna "Administrador"

**Alumno** - Hereda de Usuario
- Atributo adicional: matricula
- Metodo getRol() retorna "Alumno"

**Invitado** - Hereda de Usuario
- Atributo adicional: empresa
- Metodo getRol() retorna "Invitado"

## Ruta de ejecucion

1. Copia la carpeta a htdocs
2. Inicia Apache en XAMPP
3. Abre en navegador: http://localhost/

## Evidencia esperada


### Tabla HTML con usuarios:

| Nombre | Correo | Rol | Matricula | Empresa |
|--------|--------|-----|-----------|---------|
| Luz Salas | luzanettesalaspalomares@gmail.com | Administrador | — | — |
| Roberto Mora | roberto.mora@estudiante.com | Alumno | 2024-B | — |
| Diana Cruz | diana.cruz@empresa.mx | Invitado | — | TechCorp |

### Error controlado:

```
Error controlado: Correo invalido: correo-malo
```

## Conceptos POO aplicados

- Encapsulamiento
- Herencia (extends)
- Polimorfismo (getRol en todas las clases)
- Validacion de datos
- Manejo de excepciones (try/catch)