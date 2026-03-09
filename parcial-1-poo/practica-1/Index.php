<?php
require_once 'Usuario.php';

$usuario = new Usuario("Luz Salas", "luzanettesalaspalomares@gmail.com");

echo "Nombre: " . $usuario->getNombre() . "<br>";
echo "Correo: " . $usuario->getCorreo();
?>