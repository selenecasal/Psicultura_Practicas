<?php
session_start();
include('conexion.php');

// Procesar formulario para agregar noticias
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agregar_noticia'])) {
    $titulo = mysqli_real_escape_string($conexion, $_POST['titulo']);
    $contenido = mysqli_real_escape_string($conexion, $_POST['contenido']);
    
    $query = "INSERT INTO noticias (titulo, contenido) VALUES ('$titulo', '$contenido')";
    
    if (mysqli_query($conexion, $query)) {
        // Mensaje de éxito si quieres
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
}

// Obtener noticias existentes
$result = mysqli_query($conexion, "SELECT * FROM noticia ORDER BY fecha_publicacion DESC");
$noticias = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
    <style>
        body { 
            font-family: 'Segoe UI', sans-serif; 
            background-color: #f5f5f5;
        }
        .container { 
            max-width: 1200px; 
            margin: 20px auto; 
            padding: 30px;
            background: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        .form-noticia { 
            background: #f8f0ff; 
            border: 1px solid #e0c4ff; 
            padding: 25px; 
            margin-bottom: 40px;
            border-radius: 6px;
        }
        .noticia { 
            background: white; 
            border: 1px solid #e0e0e0; 
            padding: 20px; 
            margin-bottom: 20px;
            border-radius: 6px;
            transition: box-shadow 0.3s;
        }
        .noticia:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        h1, h2 { 
            color: #6a3093;
            margin-top: 0;
        }
        input, textarea { 
            width: 100%; 
            padding: 12px; 
            margin: 8px 0 15px; 
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        textarea {
            min-height: 150px;
            resize: vertical;
        }
        button { 
            background: #6a3093; 
            color: white; 
            border: none; 
            padding: 12px 25px; 
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover { 
            background: #7d3caf; 
        }
        .noticia small {
            color: #777;
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Panel de Administración</h1>
        
        <div class="form-noticia">
            <h2>Agregar Nueva Noticia</h2>
            <form method="post">
                <input type="text" name="titulo" placeholder="Título de la noticia" required>
                <textarea name="contenido" placeholder="Contenido completo de la noticia..." required></textarea>
                <button type="submit" name="agregar_noticia">Publicar Noticia</button>
            </form>
        </div>
        
        <h2>Noticias Existentes</h2>
        <?php foreach ($noticias as $noticia): ?>
        <div class="noticia">
            <h3><?php echo htmlspecialchars($noticia['titulo']); ?></h3>
            <small>Publicado el: <?php echo htmlspecialchars($noticia['fecha_publicacion']); ?></small>
            <p><?php echo nl2br(htmlspecialchars($noticia['contenido'])); ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
