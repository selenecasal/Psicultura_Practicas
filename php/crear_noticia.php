<?php
session_start();
include('conexion.php');

$autor = isset($_SESSION['nombreusuario']) ? mysqli_real_escape_string($conexion, $_SESSION['nombreusuario']) : 'Anónimo';

// Procesar formulario para agregar noticias
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agregar_noticia'])) {
    $titulo = mysqli_real_escape_string($conexion, $_POST['titulo']);
    $contenido = mysqli_real_escape_string($conexion, $_POST['contenido']);
    $destacada = isset($_POST['destacada']) ? 1 : 0;
    $fecha_publicacion = date('Y-m-d H:i:s');

    // Procesar imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $imagen = $_FILES['imagen']['name'];
        $ruta_temp = $_FILES['imagen']['tmp_name'];
        $destino = "img/"; // Carpeta relativa para guardar imágenes

        // Crear carpeta si no existe
        if (!is_dir($destino)) {
            mkdir($destino, 0755, true);
        }

        // Generar nombre único para evitar sobreescritura
        $ext = pathinfo($imagen, PATHINFO_EXTENSION);
        $nombre_imagen = uniqid('img_') . '.' . $ext;
        $ruta_imagen = $destino . $nombre_imagen;

        // Validar formato
        $formatos_validos = array("jpg", "jpeg", "png", "gif");
        if (in_array(strtolower($ext), $formatos_validos)) {
            if (move_uploaded_file($ruta_temp, $ruta_imagen)) {
                // Insertar noticia con imagen
                $query = "INSERT INTO noticia (titulo, contenido, imagen_url, fecha_publicacion, autor, destacada) 
                          VALUES ('$titulo', '$contenido', '$ruta_imagen', '$fecha_publicacion', '$autor', $destacada)";
                if (mysqli_query($conexion, $query)) {
                    $mensaje = "Noticia agregada con éxito.";
                } else {
                    $error = "Error al agregar noticia: " . mysqli_error($conexion);
                }
            } else {
                $error = "Error al subir la imagen.";
            }
        } else {
            $error = "Formato de imagen no válido. Solo se permiten JPG, JPEG, PNG o GIF.";
        }
    } else {
        // Insertar noticia sin imagen
        $query = "INSERT INTO noticia (titulo, contenido, fecha_publicacion, autor, destacada) 
                  VALUES ('$titulo', '$contenido', '$fecha_publicacion', '$autor', $destacada)";
        if (mysqli_query($conexion, $query)) {
            $mensaje = "Noticia agregada con éxito.";
        } else {
            $error = "Error al agregar noticia: " . mysqli_error($conexion);
        }
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

        <?php if (isset($mensaje)): ?>
            <div class="mensaje exito"><?php echo htmlspecialchars($mensaje); ?></div>
        <?php endif; ?>
        <?php if (isset($error)): ?>
            <div class="mensaje error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        
        <div class="form-noticia">
            <h2>Agregar Nueva Noticia</h2>
            <form method="post" enctype="multipart/form-data">
                <input type="text" name="titulo" placeholder="Título de la noticia" required>
                <textarea name="contenido" placeholder="Contenido completo de la noticia..." required></textarea>
                <label for="imagen">Imagen (opcional):</label>
                <input type="file" name="imagen" accept="image/*">
                <label class="checkbox-label">
                    <input type="checkbox" name="destacada" value="1"> Marcar como destacada
                </label>
                <button type="submit" name="agregar_noticia">Publicar Noticia</button>
            </form>
        </div>
        
        <h2>Noticias Existentes</h2>
        <?php foreach ($noticias as $noticia): ?>
        <div class="noticia">
            <h3><?php echo htmlspecialchars($noticia['titulo']); ?></h3>
            <small>Publicado el: <?php echo htmlspecialchars(date('d/m/Y H:i', strtotime($noticia['fecha_publicacion']))); ?> por <?php echo htmlspecialchars($noticia['autor']); ?> <?php if($noticia['destacada']) echo "<strong>(Destacada)</strong>"; ?></small>
            <?php if (!empty($noticia['imagen_url'])): ?>
                <img src="<?php echo htmlspecialchars($noticia['imagen_url']); ?>" alt="<?php echo htmlspecialchars($noticia['titulo']); ?>" class="imagen-noticia">
            <?php endif; ?>
            <p><?php echo nl2br(htmlspecialchars($noticia['contenido'])); ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
