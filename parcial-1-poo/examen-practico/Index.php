<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Examen</title>
</head>
<body>
    <h2>Examen práctico - POO</h2>
    
    <?php
    require_once 'clases/Admin.php';
    require_once 'clases/Alumno.php';
    
    try {
        $admin = new Admin("Luz Salas", "luzanettesalaspalomares@gmail.com");
    } catch (Exception $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
    
    try {
        $alumno = new Alumno("Fernando Lopez", "fernando.lopez@escuela.mx", "AIOSD");
    } catch (Exception $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
    
    try {
        $error = new Alumno("Andrea Ruiz", "correomalhecho", "asqwc");
    } catch (Exception $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
    ?>
    
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Matricula</th>
        </tr>
        <?php if (isset($admin)): ?>
        <tr>
            <td><?php echo $admin->getNombre(); ?></td>
            <td><?php echo $admin->getCorreo(); ?></td>
            <td><?php echo $admin->getRol(); ?></td>
            <td>-</td>
        </tr>
        <?php endif; ?>
        
        <?php if (isset($alumno)): ?>
        <tr>
            <td><?php echo $alumno->getNombre(); ?></td>
            <td><?php echo $alumno->getCorreo(); ?></td>
            <td><?php echo $alumno->getRol(); ?></td>
            <td><?php echo $alumno->getMatricula(); ?></td>
        </tr>
        <?php endif; ?>
    </table>
</body>
</html>