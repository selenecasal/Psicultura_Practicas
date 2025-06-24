<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psicultura - Panel Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --color-primario: #670066;
            --color-hover: #950095;
            --color-texto: #7A7A7A;
            --color-enfasis: #C66CC5;
            --bg-principal: #FFFFFF;
            --bg-paginas: #FFF7FF;
            --borde-contenedor: #FF90FE;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-principal);
            color: var(--color-texto);
            margin: 0;
            padding: 0;
        }

        .sidebar {
            background-color: var(--color-primario);
            color: white;
            width: 250px;
            height: 100vh;
            position: fixed;
            padding: 20px;
            box-sizing: border-box;
        }

        .sidebar-header {
            font-weight: 500;
            font-size: 20px;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            text-align: center;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            margin-bottom: 5px;
            border-radius: 6px;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }

        .nav-link:hover {
            background-color: var(--color-hover);
        }

        .nav-link.active {
            background-color: var(--color-enfasis);
        }

        .nav-link i {
            margin-right: 10px;
        }

        .main-content {
            margin-left: 250px;
            padding: 30px;
            background-color: var(--bg-paginas);
            min-height: 100vh;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-weight: 500;
            font-size: 20px;
            color: var(--color-primario);
            margin: 0;
        }

        .content-box {
            background-color: white;
            border: 1px solid var(--borde-contenedor);
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .content-title {
            font-weight: 500;
            font-size: 20px;
            color: var(--color-enfasis);
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            padding: 12px 15px;
            font-weight: 500;
            color: var(--color-primario);
            border-bottom: 2px solid var(--borde-contenedor);
        }

        td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
        }

        tr:hover td {
            background-color: #f9f9f9;
        }

        .status {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .status.read {
            background-color: #E8F5E9;
            color: #4CAF50;
        }

        .status.unread {
            background-color: #FFF8E1;
            color: #FFA000;
        }

        .btn {
            padding: 8px 15px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
            font-size: 14px;
        }

        .btn-primary {
            background-color: var(--color-primario);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--color-hover);
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--color-primario);
            color: var(--color-primario);
        }

        .btn-outline:hover {
            background-color: var(--color-primario);
            color: white;
        }

        .btn-danger {
            background-color: #F44336;
            color: white;
        }

        .btn-danger:hover {
            background-color: #D32F2F;
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 12px;
        }

        .search-bar {
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 300px;
            font-size: 14px;
            background-color: var(--bg-paginas);
        }

        .search-bar:focus {
            outline: none;
            border-color: var(--color-enfasis);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--color-enfasis);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .photo-preview {
            width: 100%;
            max-width: 1200px;
            height: 300px;
            background-color: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            border: 1px dashed var(--borde-contenedor);
            position: relative;
            overflow: hidden;
        }

        .photo-preview img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .photo-upload {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .photo-info {
            text-align: center;
            color: var(--color-texto);
        }

        .photo-info i {
            font-size: 48px;
            color: var(--borde-contenedor);
            margin-bottom: 15px;
        }

        .noticia-card {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid var(--borde-contenedor);
            border-radius: 8px;
            background-color: white;
        }

        .noticia-title {
            font-weight: 500;
            font-size: 18px;
            color: var(--color-primario);
            margin-bottom: 10px;
        }

        .noticia-date {
            font-size: 12px;
            color: #999;
            margin-bottom: 15px;
        }

        .noticia-image {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            margin-bottom: 15px;
            border-radius: 4px;
        }

        .noticia-content {
            line-height: 1.6;
        }

        .tab-container {
            display: flex;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }

        .tab {
            padding: 10px 20px;
            cursor: pointer;
            border-bottom: 3px solid transparent;
            font-weight: 500;
        }

        .tab.active {
            border-bottom-color: var(--color-enfasis);
            color: var(--color-enfasis);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .consulta-message {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin-top: 10px;
            border-left: 3px solid var(--color-enfasis);
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
                padding: 10px;
            }
            
            .sidebar-header {
                display: none;
            }
            
            .nav-link span {
                display: none;
            }
            
            .nav-link i {
                margin-right: 0;
                font-size: 20px;
            }
            
            .main-content {
                margin-left: 70px;
                padding: 15px;
            }

            .photo-preview {
                height: 200px;
            }
        }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">Psicultura Admin</div>
        <a href="#" class="nav-link active" data-tab="dashboard">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
        <a href="#" class="nav-link" data-tab="noticias">
            <i class="fas fa-newspaper"></i>
            <span>Noticias</span>
        </a>
        <a href="#" class="nav-link" data-tab="consultas">
            <i class="fas fa-envelope"></i>
            <span>Consultas</span>
        </a>
        <a href="#" class="nav-link" data-tab="configuracion">
            <i class="fas fa-cog"></i>
            <span>Configuración</span>
        </a>
        <div style="position: absolute; bottom: 20px; width: calc(100% - 40px);">
            <a href="#" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
                <span>Cerrar Sesión</span>
            </a>
        </div>
    </div>

    <div class="main-content">
        <!-- Dashboard Tab -->
        <div id="dashboard" class="tab-content active">
            <div class="header">
                <h1>Resumen General</h1>
            </div>

            <div class="content-box">
                <div class="content-title">
                    Últimas Consultas
                    <button class="btn btn-outline btn-sm" onclick="mostrarTab('consultas')">
                        Ver Todas
                    </button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Interés</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>María González</td>
                            <td>maria@gmail.com</td>
                            <td>Cultivo de rosas</td>
                            <td>15/06/2023</td>
                            <td><span class="status unread">No leída</span></td>
                            <td>
                                <button class="btn btn-outline btn-sm">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Carlos Martínez</td>
                            <td>carlos@hotmail.com</td>
                            <td>Podas</td>
                            <td>14/06/2023</td>
                            <td><span class="status read">Leída</span></td>
                            <td>
                                <button class="btn btn-outline btn-sm">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Laura Sánchez</td>
                            <td>laura@gmail.com</td>
                            <td>Control de plagas</td>
                            <td>13/06/2023</td>
                            <td><span class="status read">Leída</span></td>
                            <td>
                                <button class="btn btn-outline btn-sm">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="content-box">
                <div class="content-title">
                    Últimas Noticias
                    <button class="btn btn-primary btn-sm" onclick="mostrarNuevaNoticia()">
                        <i class="fas fa-plus"></i> Nueva Noticia
                    </button>
                </div>
                
                <div class="noticia-card">
                    <div class="noticia-title">Nuevas Técnicas de Cultivo</div>
                    <div class="noticia-date">Publicado el 12/06/2023</div>
                    <img src="https://images.unsplash.com/photo-1549345803-5f106209dddb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" class="noticia-image">
                    <div class="noticia-content">
                        <p>Hemos implementado nuevas técnicas de cultivo que aumentan el rendimiento en un 20%. Estas técnicas se basan en...</p>
                    </div>
                    <div style="margin-top: 15px;">
                        <button class="btn btn-outline btn-sm">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                        <button class="btn btn-danger btn-sm" style="margin-left: 10px;">
                            <i class="fas fa-trash"></i> Eliminar
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Noticias Tab -->
        <div id="noticias" class="tab-content">
            <div class="header">
                <h1>Gestión de Noticias</h1>
                <button class="btn btn-primary" onclick="mostrarNuevaNoticia()">
                    <i class="fas fa-plus"></i> Nueva Noticia
                </button>
            </div>

            <div class="content-box" id="lista-noticias">
                <div class="content-title">
                    Todas las Noticias
                </div>
                
                <div class="noticia-card">
                    <div class="noticia-title">Nuevas Técnicas de Cultivo</div>
                    <div class="noticia-date">Publicado el 12/06/2023</div>
                    <div class="noticia-content">
                        <p>Hemos implementado nuevas técnicas de cultivo que aumentan el rendimiento en un 20%...</p>
                    </div>
                    <div style="margin-top: 15px;">
                        <button class="btn btn-outline btn-sm">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                        <button class="btn btn-danger btn-sm" style="margin-left: 10px;">
                            <i class="fas fa-trash"></i> Eliminar
                        </button>
                    </div>
                </div>
                
                <div class="noticia-card">
                    <div class="noticia-title">Taller de Podas</div>
                    <div class="noticia-date">Publicado el 05/06/2023</div>
                    <div class="noticia-content">
                        <p>Este sábado realizaremos un taller gratuito sobre técnicas de poda para rosales...</p>
                    </div>
                    <div style="margin-top: 15px;">
                        <button class="btn btn-outline btn-sm">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                        <button class="btn btn-danger btn-sm" style="margin-left: 10px;">
                            <i class="fas fa-trash"></i> Eliminar
                        </button>
                    </div>
                </div>
                
                <div class="noticia-card">
                    <div class="noticia-title">Nueva Variedad de Rosas</div>
                    <div class="noticia-date">Publicado el 28/05/2023</div>
                    <div class="noticia-content">
                        <p>Presentamos nuestra nueva variedad de rosas resistentes a plagas, disponible a partir de...</p>
                    </div>
                    <div style="margin-top: 15px;">
                        <button class="btn btn-outline btn-sm">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                        <button class="btn btn-danger btn-sm" style="margin-left: 10px;">
                            <i class="fas fa-trash"></i> Eliminar
                        </button>
                    </div>
                </div>
            </div>

            <div class="content-box" id="nueva-noticia" style="display: none;">
                <div class="content-title">
                    Nueva Noticia
                    <button class="btn btn-outline btn-sm" onclick="mostrarListaNoticia()"></button>
                                </div>

            <div class="content-box" id="form-noticia" style="display: none;">
                <div class="content-title">
                    <span id="form-noticia-title">Nueva Noticia</span>
                    <button class="btn btn-outline btn-sm" onclick="mostrarListaNoticias()">
                        <i class="fas fa-arrow-left"></i> Volver
                    </button>
                </div>
                
                <div class="form-group">
                    <label for="noticia-titulo" class="form-label">Título</label>
                    <input type="text" id="noticia-titulo" class="form-control" placeholder="Ingrese el título de la noticia">
                </div>
                
                <div class="form-group">
                    <label for="noticia-imagen" class="form-label">Imagen Destacada</label>
                    <div class="photo-preview">
                        <input type="file" id="noticia-imagen" class="photo-upload" accept="image/*">
                        <div class="photo-info">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <div>Haz clic para seleccionar una imagen</div>
                            <div style="font-size: 14px; margin-top: 10px;">Tamaño recomendado: 1200x600 px (Max. 300KB)</div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="noticia-contenido" class="form-label">Contenido</label>
                    <textarea id="noticia-contenido" class="form-control" rows="10" placeholder="Escriba el contenido de la noticia"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="noticia-fecha" class="form-label">Fecha de Publicación</label>
                    <input type="date" id="noticia-fecha" class="form-control">
                </div>
                
                <div style="display: flex; justify-content: flex-end;">
                    <button class="btn btn-primary" id="btn-guardar-noticia">
                        <i class="fas fa-save"></i> Guardar Noticia
                    </button>
                </div>
            </div>
        </div>

        <!-- Consultas Tab -->
        <div id="consultas" class="tab-content">
            <div class="header">
                <h1>Consultas de Visitantes</h1>
                <input type="text" placeholder="Buscar consultas..." class="search-bar">
            </div>

            <div class="tab-container">
                <div class="tab active" data-filter="all">Todas</div>
                <div class="tab" data-filter="unread">No leídas</div>
                <div class="tab" data-filter="read">Leídas</div>
            </div>

            <div class="content-box">
                <div class="content-title">
                    Lista de Consultas
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Interés</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="consultas-body">
                        <tr>
                            <td>María González</td>
                            <td>maria@gmail.com</td>
                            <td>+54 11 1234-5678</td>
                            <td>Cultivo de rosas</td>
                            <td>15/06/2023</td>
                            <td><span class="status unread">No leída</span></td>
                            <td>
                                <button class="btn btn-outline btn-sm" onclick="verConsulta(1)">
                                    <i class="fas fa-eye"></i> Ver
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Carlos Martínez</td>
                            <td>carlos@hotmail.com</td>
                            <td>+54 11 2345-6789</td>
                            <td>Podas</td>
                            <td>14/06/2023</td>
                            <td><span class="status read">Leída</span></td>
                            <td>
                                <button class="btn btn-outline btn-sm" onclick="verConsulta(2)">
                                    <i class="fas fa-eye"></i> Ver
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Laura Sánchez</td>
                            <td>laura@gmail.com</td>
                            <td>+54 11 3456-7890</td>
                            <td>Control de plagas</td>
                            <td>13/06/2023</td>
                            <td><span class="status read">Leída</span></td>
                            <td>
                                <button class="btn btn-outline btn-sm" onclick="verConsulta(3)">
                                    <i class="fas fa-eye"></i> Ver
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Juan Pérez</td>
                            <td>juan@yahoo.com</td>
                            <td>+54 11 4567-8901</td>
                            <td>Fertilizantes</td>
                            <td>12/06/2023</td>
                            <td><span class="status unread">No leída</span></td>
                            <td>
                                <button class="btn btn-outline btn-sm" onclick="verConsulta(4)">
                                    <i class="fas fa-eye"></i> Ver
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Detalle Consulta -->
        <div id="detalle-consulta" class="tab-content">
            <div class="header">
                <h1>Detalle de Consulta</h1>
                <button class="btn btn-outline" onclick="mostrarTab('consultas')">
                    <i class="fas fa-arrow-left"></i> Volver
                </button>
            </div>

            <div class="content-box">
                <div class="content-title">
                    Consulta de <span id="consulta-nombre">María González</span>
                    <button class="btn btn-primary btn-sm" id="btn-marcar-leida">
                        <i class="fas fa-check"></i> Marcar como leída
                    </button>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Fecha</label>
                    <div id="consulta-fecha">15/06/2023 14:30</div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <div id="consulta-email">maria@gmail.com</div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Teléfono</label>
                    <div id="consulta-telefono">+54 11 1234-5678</div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Interés</label>
                    <div id="consulta-interes">Cultivo de rosas</div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Mensaje</label>
                    <div class="consulta-message" id="consulta-mensaje">
                        Hola, estoy interesada en información sobre el cultivo de rosas en clima templado. ¿Qué variedades recomiendan para principiantes? ¿Cuál es la mejor época para plantar? Gracias.
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="respuesta" class="form-label">Responder</label>
                    <textarea id="respuesta" class="form-control" rows="5" placeholder="Escriba su respuesta..."></textarea>
                </div>
                
                <div style="display: flex; justify-content: flex-end;">
                    <button class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Enviar Respuesta
                    </button>
                </div>
            </div>
        </div>

        <!-- Configuración Tab -->
        <div id="configuracion" class="tab-content">
            <div class="header">
                <h1>Configuración del Sitio</h1>
            </div>

            <div class="content-box">
                <div class="content-title">
                    Información Básica
                </div>
                
                <div class="form-group">
                    <label for="nombre-sitio" class="form-label">Nombre del Sitio</label>
                    <input type="text" id="nombre-sitio" class="form-control" value="Psicultura Especializada">
                </div>
                
                <div class="form-group">
                    <label for="email-contacto" class="form-label">Email de Contacto</label>
                    <input type="email" id="email-contacto" class="form-control" value="contacto@psicultura.com">
                </div>
                
                <div class="form-group">
                    <label for="telefono-contacto" class="form-label">Teléfono de Contacto</label>
                    <input type="text" id="telefono-contacto" class="form-control" value="+54 11 9876-5432">
                </div>
                
                <div class="form-group">
                    <label for="direccion" class="form-label">Dirección</label>
                    <textarea id="direccion" class="form-control" rows="3">Av. Siempreviva 742, Buenos Aires</textarea>
                </div>
                
                <div style="display: flex; justify-content: flex-end;">
                    <button class="btn btn-primary">
                        <i class="fas fa-save"></i> Guardar Cambios
                    </button>
                </div>
            </div>
            
            <div class="content-box">
                <div class="content-title">
                    Cambiar Contraseña
                </div>
                
                <div class="form-group">
                    <label for="password-actual" class="form-label">Contraseña Actual</label>
                    <input type="password" id="password-actual" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="password-nueva" class="form-label">Nueva Contraseña</label>
                    <input type="password" id="password-nueva" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="password-confirmar" class="form-label">Confirmar Nueva Contraseña</label>
                    <input type="password" id="password-confirmar" class="form-control">
                </div>
                
                <div style="display: flex; justify-content: flex-end;">
                    <button class="btn btn-primary">
                        <i class="fas fa-save"></i> Cambiar Contraseña
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Funciones para manejar las pestañas
        function mostrarTab(tabId) {
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });
            
            document.getElementById(tabId).classList.add('active');
            document.querySelector(`.nav-link[data-tab="${tabId}"]`).classList.add('active');
            
            // Ocultar formularios específicos si están visibles
            if (tabId !== 'noticias') {
                mostrarListaNoticias();
            }
            if (tabId !== 'consultas') {
                document.getElementById('detalle-consulta').classList.remove('active');
            }
        }
        
        // Configurar eventos de navegación
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const tabId = this.getAttribute('data-tab');
                mostrarTab(tabId);
            });
        });
        
        // Configurar eventos de filtro de consultas
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                const filter = this.getAttribute('data-filter');
                const rows = document.querySelectorAll('#consultas-body tr');
                
                rows.forEach(row => {
                    const status = row.querySelector('.status').classList.contains('read') ? 'read' : 'unread';
                    
                    if (filter === 'all' || filter === status) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        });
        
        // Funciones para manejar noticias
        function mostrarNuevaNoticia() {
            document.getElementById('lista-noticias').style.display = 'none';
            document.getElementById('form-noticia').style.display = 'block';
            document.getElementById('form-noticia-title').textContent = 'Nueva Noticia';
            
            // Limpiar formulario
            document.getElementById('noticia-titulo').value = '';
            document.getElementById('noticia-contenido').value = '';
            document.getElementById('noticia-fecha').valueAsDate = new Date();
            
            // Limpiar preview de imagen
            const preview = document.querySelector('#form-noticia .photo-preview');
            preview.innerHTML = `
                <input type="file" id="noticia-imagen" class="photo-upload" accept="image/*">
                <div class="photo-info">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <div>Haz clic para seleccionar una imagen</div>
                    <div style="font-size: 14px; margin-top: 10px;">Tamaño recomendado: 1200x600 px (Max. 300KB)</div>
                </div>
            `;
            
            // Configurar nuevo evento para la imagen
            document.getElementById('noticia-imagen').addEventListener('change', function(e) {
                const preview = this.closest('.photo-preview');
                const file = e.target.files[0];
                
                if (file) {
                    const reader = new FileReader();
                    
                    reader.onload = function(event) {
                        const img = document.createElement('img');
                        img.src = event.target.result;
                        
                        preview.innerHTML = '';
                        preview.appendChild(img);
                    }
                    
                    reader.readAsDataURL(file);
                }
            });
        }
        
        function mostrarListaNoticias() {
            document.getElementById('lista-noticias').style.display = 'block';
            document.getElementById('form-noticia').style.display = 'none';
        }
        
        function editarNoticia(id) {
            mostrarNuevaNoticia();
            document.getElementById('form-noticia-title').textContent = 'Editar Noticia';
            
            // Aquí iría la lógica para cargar los datos de la noticia
            // Ejemplo con datos hardcodeados:
            document.getElementById('noticia-titulo').value = 'Nuevas Técnicas de Cultivo';
            document.getElementById('noticia-contenido').value = 'Hemos implementado nuevas técnicas de cultivo que aumentan el rendimiento en un 20%. Estas técnicas se basan en...';
            
            const fecha = new Date();
            fecha.setDate(12);
            fecha.setMonth(5); // Junio (0-indexed)
            fecha.setFullYear(2023);
            document.getElementById('noticia-fecha').valueAsDate = fecha;
            
            // Simular imagen cargada
            const preview = document.querySelector('#form-noticia .photo-preview');
            preview.innerHTML = '';
            const img = document.createElement('img');
            img.src = 'https://images.unsplash.com/photo-1549345803-5f106209dddb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80';
            preview.appendChild(img);
        }
        
        // Funciones para manejar consultas
        function verConsulta(id) {
            mostrarTab('detalle-consulta');
            
            // Aquí iría la lógica para cargar los datos de la consulta
            // Ejemplo con datos hardcodeados:
            const consultas = {
                1: {
                    nombre: 'María González',
                    email: 'maria@gmail.com',
                    telefono: '+54 11 1234-5678',
                    interes: 'Cultivo de rosas',
                    fecha: '15/06/2023 14:30',
                    mensaje: 'Hola, estoy interesada en información sobre el cultivo de rosas en clima templado. ¿Qué variedades recomiendan para principiantes? ¿Cuál es la mejor época para plantar? Gracias.',
                    leido: false
                },
                2: {
                    nombre: 'Carlos Martínez',
                    email: 'carlos@hotmail.com',
                    telefono: '+54 11 2345-6789',
                    interes: 'Podas',
                    fecha: '14/06/2023 10:15',
                    mensaje: 'Buen día, necesito asesoramiento sobre técnicas de poda para mis rosales. ¿Ofrecen talleres prácticos?',
                    leido: true
                },
                3: {
                    nombre: 'Laura Sánchez',
                    email: 'laura@gmail.com',
                    telefono: '+54 11 3456-7890',
                    interes: 'Control de plagas',
                    fecha: '13/06/2023 16:45',
                    mensaje: 'Tengo problemas',
                                        leido: true
                },
                4: {
                    nombre: 'Juan Pérez',
                    email: 'juan@yahoo.com',
                    telefono: '+54 11 4567-8901',
                    interes: 'Fertilizantes',
                    fecha: '12/06/2023 09:20',
                    mensaje: 'Quisiera saber qué tipo de fertilizante recomiendan para rosas recién plantadas.',
                    leido: false
                }
            };
            
            const consulta = consultas[id];
            
            document.getElementById('consulta-nombre').textContent = consulta.nombre;
            document.getElementById('consulta-fecha').textContent = consulta.fecha;
            document.getElementById('consulta-email').textContent = consulta.email;
            document.getElementById('consulta-telefono').textContent = consulta.telefono;
            document.getElementById('consulta-interes').textContent = consulta.interes;
            document.getElementById('consulta-mensaje').textContent = consulta.mensaje;
            
            // Configurar botón de marcar como leída
            const btnMarcar = document.getElementById('btn-marcar-leida');
            if (consulta.leido) {
                btnMarcar.innerHTML = '<i class="fas fa-check"></i> Marcar como no leída';
                btnMarcar.onclick = function() { marcarConsulta(id, false); };
            } else {
                btnMarcar.innerHTML = '<i class="fas fa-check"></i> Marcar como leída';
                btnMarcar.onclick = function() { marcarConsulta(id, true); };
            }
        }
        
        function marcarConsulta(id, leido) {
            // Aquí iría la lógica para actualizar el estado en la base de datos
            // Por ahora solo simulamos el cambio en la interfaz
            
            // Actualizar en la tabla de consultas
            const rows = document.querySelectorAll('#consultas-body tr');
            rows.forEach(row => {
                if (row.getAttribute('data-id') == id) {
                    const statusSpan = row.querySelector('.status');
                    if (leido) {
                        statusSpan.classList.remove('unread');
                        statusSpan.classList.add('read');
                        statusSpan.textContent = 'Leída';
                    } else {
                        statusSpan.classList.remove('read');
                        statusSpan.classList.add('unread');
                        statusSpan.textContent = 'No leída';
                    }
                }
            });
            
            // Actualizar en el detalle
            const btnMarcar = document.getElementById('btn-marcar-leida');
            if (leido) {
                btnMarcar.innerHTML = '<i class="fas fa-check"></i> Marcar como no leída';
                btnMarcar.onclick = function() { marcarConsulta(id, false); };
            } else {
                btnMarcar.innerHTML = '<i class="fas fa-check"></i> Marcar como leída';
                btnMarcar.onclick = function() { marcarConsulta(id, true); };
            }
            
            // Mostrar feedback al usuario
            alert(`Consulta marcada como ${leido ? 'leída' : 'no leída'}`);
        }
        
        // Configurar preview de imagen para noticias
        document.getElementById('noticia-imagen').addEventListener('change', function(e) {
            const preview = this.closest('.photo-preview');
            const file = e.target.files[0];
            
            if (file) {
                const reader = new FileReader();
                
                reader.onload = function(event) {
                    const img = document.createElement('img');
                    img.src = event.target.result;
                    
                    preview.innerHTML = '';
                    preview.appendChild(img);
                }
                
                reader.readAsDataURL(file);
            }
        });
        
        // Guardar noticia
        document.getElementById('btn-guardar-noticia').addEventListener('click', function() {
            const titulo = document.getElementById('noticia-titulo').value;
            const contenido = document.getElementById('noticia-contenido').value;
            const fecha = document.getElementById('noticia-fecha').value;
            
            if (!titulo || !contenido || !fecha) {
                alert('Por favor complete todos los campos obligatorios');
                return;
            }
            
            // Aquí iría la lógica para guardar en la base de datos
            alert('Noticia guardada correctamente');
            mostrarListaNoticias();
            
            // Simulamos agregar la noticia a la lista
            const noticiasContainer = document.getElementById('lista-noticias');
            const nuevaNoticia = document.createElement('div');
            nuevaNoticia.className = 'noticia-card';
            nuevaNoticia.innerHTML = `
                <div class="noticia-title">${titulo}</div>
                <div class="noticia-date">Publicado el ${new Date(fecha).toLocaleDateString()}</div>
                <div class="noticia-content">
                    <p>${contenido.substring(0, 100)}...</p>
                </div>
                <div style="margin-top: 15px;">
                    <button class="btn btn-outline btn-sm" onclick="editarNoticia('nuevo')">
                        <i class="fas fa-edit"></i> Editar
                    </button>
                    <button class="btn btn-danger btn-sm" style="margin-left: 10px;">
                        <i class="fas fa-trash"></i> Eliminar
                    </button>
                </div>
            `;
            
            noticiasContainer.insertBefore(nuevaNoticia, noticiasContainer.firstChild);
        });
        
        // Manejo de fotos para noticias
        document.addEventListener('DOMContentLoaded', function() {
            // Configurar drag and drop para imágenes
            const photoPreviews = document.querySelectorAll('.photo-preview');
            
            photoPreviews.forEach(preview => {
                preview.addEventListener('dragover', function(e) {
                    e.preventDefault();
                    this.style.borderColor = 'var(--color-enfasis)';
                    this.style.backgroundColor = '#f0f0f0';
                });
                
                preview.addEventListener('dragleave', function() {
                    this.style.borderColor = 'var(--borde-contenedor)';
                    this.style.backgroundColor = '#f5f5f5';
                });
                
                preview.addEventListener('drop', function(e) {
                    e.preventDefault();
                    this.style.borderColor = 'var(--borde-contenedor)';
                    this.style.backgroundColor = '#f5f5f5';
                    
                    const file = e.dataTransfer.files[0];
                    if (file && file.type.match('image.*')) {
                        const input = this.querySelector('input[type="file"]');
                        
                        // Crear un nuevo DataTransfer para asignar el archivo al input
                        const dt = new DataTransfer();
                        dt.items.add(file);
                        input.files = dt.files;
                        
                        // Disparar el evento change manualmente
                        const event = new Event('change');
                        input.dispatchEvent(event);
                    }
                });
            });
        });
        
        // Inicializar la pestaña dashboard al cargar
        document.addEventListener('DOMContentLoaded', function() {
            // Asignar IDs a las filas de consultas para poder identificarlas
            const consultaRows = document.querySelectorAll('#consultas-body tr');
            consultaRows.forEach((row, index) => {
                row.setAttribute('data-id', index + 1);
            });
        });
    </script>
</body>
</html>
