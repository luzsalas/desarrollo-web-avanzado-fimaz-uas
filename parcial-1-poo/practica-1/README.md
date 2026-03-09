# Práctica: Clase Usuario en PHP

## Objetivo

Crear una clase Usuario en PHP aplicando encapsulamiento con atributos privados y métodos getter/setter.

## Descripción

Clase Usuario con:
- Atributos privados: nombre y correo
- Constructor para inicializar valores
- Métodos getNombre(), getCorreo(),setNombre() y setCorreo()

## Archivos

- Usuario.php - La clase Usuario
- index.php - Prueba de la clase


## Ejemplo de uso

```php
$usuario = new Usuario("Luz Salas", "luzanettesalaspalomares@gmail.com");
echo $usuario->getNombre();  
echo $usuario->getCorreo();  
```