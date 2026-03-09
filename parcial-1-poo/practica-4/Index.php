<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica 4 - POO</title>
</head>
<body>
    <h2>Practica 4 - Sistema de Usuarios</h2>
    
    <?php
    require_once 'Admin.php';
    require_once 'Alumno.php';
    require_once 'Invitado.php';
    
    $usuarios = [];
    
    try {
        $usuarios[] = new Admin("Luz Salas", "luzanettesalaspalomares@gmail.com");
        $usuarios[] = new Alumno("Roberto Mora", "roberto.mora@estudiante.com", "2024-B");
        $usuarios[] = new Invitado("Diana Cruz", "diana.cruz@empresa.mx", "Hotel Emporio");
        
        // Correo invalido
        $usuarios[] = new Admin("Error", "correo-malo");
        
    } catch (Exception $e) {
        echo "<p><strong>Error controlado:</strong> " . $e->getMessage() . "</p>";
    }
    ?>
    
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Matricula</th>
            <th>Empresa</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?php echo $usuario->getNombre(); ?></td>
            <td><?php echo $usuario->getCorreo(); ?></td>
            <td><?php echo $usuario->getRol(); ?></td>
            <td><?php echo ($usuario instanceof Alumno) ? $usuario->getMatricula() : "—"; ?></td>
            <td><?php echo ($usuario instanceof Invitado) ? $usuario->getEmpresa() : "—"; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>