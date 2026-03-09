<?php
require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';

echo "Practica 3 - Validacion de Correos\n\n";

// Admin valido
echo "1. Admin con correo valido\n";
try {
    $admin = new Admin("Luz Salas", "luzanettesalaspalomares@gmail.com");
    echo "Nombre: " . $admin->getNombre() . "\n";
    echo "Correo: " . $admin->getCorreo() . "\n";
    echo "Rol: " . $admin->getRol() . "\n\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n\n";
}

// Alumno valido
echo "2. Alumno con correo valido\n";
try {
    $alumno = new Alumno("Carlos Mendoza", "carlos.mendoza@escuela.mx", "2024-A");
    echo "Nombre: " . $alumno->getNombre() . "\n";
    echo "Correo: " . $alumno->getCorreo() . "\n";
    echo "Matricula: " . $alumno->getMatricula() . "\n";
    echo "Rol: " . $alumno->getRol() . "\n\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n\n";
}

// Correo invalido
echo "3. Admin con correo invalido\n";
try {
    $error = new Admin("Sofia Torres", "correo-sin-arroba");
    echo "Nombre: " . $error->getNombre() . "\n\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n\n";
}
?>