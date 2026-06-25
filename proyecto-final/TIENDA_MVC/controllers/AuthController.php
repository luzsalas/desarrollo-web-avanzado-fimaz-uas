<?php
namespace Controllers;
//este es el controlador de Autenticacion
//Administra el acceso de seguridad al panel de la tienda, controlando el 
//inicio de sesión, la validación de credenciales con contraseñas encriptadas,
//el manejo de variables de sesión globales y el cierre seguro del sistema
use Models\UsuarioModel;
class AuthController
{
    public function showLogin(): void
    {
        require_once __DIR__ . '/../views/auth/login.php';
    }
    public function login(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $username = trim($_POST['username'] ?? '');
        $password = trim($_POST['password'] ?? '');
        if ($username === '' || $password === '') {
            $_SESSION['error'] = 'Todos los campos son obligatorios.';
            header('Location: /TIENDA_MVC/login');
            exit;
        }
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->buscarPorUsername($username);
        if ($usuario && password_verify($password, $usuario['password'])) 
        {
            $_SESSION['admin'] = [
                'id' => $usuario['id'],
                'username' => $usuario['username'],
                'nombre_completo' => $usuario['nombre_completo']
            ];
            $_SESSION['success'] = 'Bienvenido, ' . $usuario['nombre_completo'] . '.';
            header('Location: /TIENDA_MVC/productos');
            exit;
        }
        $_SESSION['error'] = 'Credenciales incorrectas.';
        header('Location: /TIENDA_MVC/login');
        exit;
    }
    public function logout(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
        header('Location: /TIENDA_MVC/login');
        exit;
    }
}
