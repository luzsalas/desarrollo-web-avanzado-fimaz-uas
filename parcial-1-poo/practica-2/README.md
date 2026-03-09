# Práctica 2 - Herencia en PHP

## Objetivo

Implementar herencia creando una clase Admin que extiende la clase Usuario.

## Herencia Aplicada

La clase Admin hereda de Usuario usando extends:

```php
class Admin extends Usuario {
    public function getRol() {
        return "Administrador";
    }
}
```

Esto permite que Admin use todos los métodos de Usuario (getNombre, getCorreo) y agregue su propio método getRol().

## Diferencias entre Usuario y Admin

**Usuario:**
- Clase base
- Tiene: nombre, correo
- Métodos: constructor, getters, setters

**Admin:**
- Hereda de Usuario
- Tiene todo lo de Usuario + método getRol()
- Puede usar getNombre() y getCorreo() aunque no los defina


## Ejecutar

1. Copia a htdocs
2. Inicia Apache
3. Abre: http://localhost/

## Evidencia de Ejecución
![evidencia2](https://github.com/user-attachments/assets/2ac3c26a-1307-4ac1-8373-846e2b6118bb)


Al abrir index.php se muestra:

```
Datos del Administrador

Nombre: Luz Salas
Correo: luzanettesalaspalomares@gmail.com
Rol: Administrador
```


El objeto Admin usa métodos heredados (getNombre, getCorreo) y su propio método (getRol).
