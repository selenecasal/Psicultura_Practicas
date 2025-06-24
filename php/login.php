<?php
session_start();
require_once ('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $password = htmlspecialchars(trim($_POST['password']));
        
        // Validación básica
        if (empty($email) || empty($password)) {
            throw new Exception("Todos los campos son obligatorios.");
        }

        // Verificar si el administrador existe
        $query = "SELECT * FROM administrador WHERE email = :email";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            // Verificar la contraseña
            if (password_verify($password, $row['password'])) {
                // Iniciar sesión
                $_SESSION['admin_id'] = $row['id'];
                $_SESSION['admin_nombre'] = $row['nombre'];
                header("Location: panel_admin.php"); // Redirigir al panel de administración
                exit();
            } else {
                throw new Exception("Contraseña incorrecta.");
            }
        } else {
            throw new Exception("El correo electrónico no está registrado.");
        }
    }
?>
