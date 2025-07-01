<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piscicultura Municipal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css?4">
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Piscicultura</h1>
            <p class="subtitle">Desarrollo sostenible de la acuicultura en nuestra región</p>
        </div>
    </header>
    
    <nav>
        <div class="nav-container">
            <a href="#inicio" class="nav-link active">Inicio</a>
            <a href="#especies" class="nav-link">Especies</a>
            <a href="#proyectos" class="nav-link">Proyectos</a>
            <a href="#capacitacion" class="nav-link"></a>
            <a href="#contacto" class="nav-link">Contacto</a>
        </div>
    </nav>
    
    <main>
        <section id="inicio">
            <div class="hero">
                <div class="hero-content">
                    <h2>Promoviendo la acuicultura responsable</h2>
                    <p>Nuestro programa municipal de piscicultura busca fomentar el desarrollo sostenible de la acuicultura, brindando apoyo técnico y capacitación a productores locales.</p>
                    <a href="#proyectos" class="btn">Conoce nuestros proyectos</a>
                </div>
            </div>
            
            <h2 class="section-title">Nuestros Servicios</h2>
            
            <div class="features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-water"></i>
                    </div>
                    <h3>Asesoría Técnica</h3>
                    <p>Brindamos asesoramiento especializado en el manejo de estanques, calidad del agua y alimentación de peces.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-fish"></i>
                    </div>
                    <h3>Producción de Alevines</h3>
                    <p>Proveemos alevines de calidad para iniciar o repoblar tus estanques piscícolas.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Capacitaciones</h3>
                    <p>Talleres prácticos sobre técnicas de cultivo, manejo sanitario y comercialización.</p>
                </div>
            </div>
        </section>
        
        <section id="especies">
            <h2 class="section-title">Especies que Cultivamos</h2>
            
            <div class="species-gallery">
                <div class="species-card">
                    <img src="https://images.unsplash.com/photo-1552728089-57bdde30beb3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Tilapia" class="species-img">
                    <div class="species-info">
                        <h3 class="species-name">Tilapia</h3>
                        <p>Especie resistente y de rápido crecimiento, ideal para climas cálidos.</p>
                    </div>
                </div>
                
                <div class="species-card">
                    <img src="https://images.unsplash.com/photo-1524704654690-b56c05c78a00?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Trucha" class="species-img">
                    <div class="species-info">
                        <h3 class="species-name">Trucha</h3>
                        <p>Excelente para zonas frías, con alto valor comercial.</p>
                    </div>
                </div>
                
                <div class="species-card">
                    <img src="https://images.unsplash.com/photo-1560279966-8ff5f4a97d3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Carpa" class="species-img">
                    <div class="species-info">
                        <h3 class="species-name">Carpa</h3>
                        <p>Resistente y adaptable a diferentes condiciones de cultivo.</p>
                    </div>
                </div>
                
                <div class="species-card">
                    <img src="https://images.unsplash.com/photo-1552728089-57bdde30beb3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Pacu" class="species-img">
                    <div class="species-info">
                        <h3 class="species-name">Pacu</h3>
                        <p>Especie omnívora muy apreciada en el mercado local.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="proyectos">
            <h2 class="section-title">Proyectos en Marcha</h2>
            
            <div class="features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-hand-holding-water"></i>
                    </div>
                    <h3>Escuelas Piscícolas</h3>
                    <p>Programa de formación práctica para nuevos acuicultores con acompañamiento técnico.</p>
                    <a href="#" class="btn">Más información</a>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3>Repoblamiento de Cuerpos de Agua</h3>
                    <p>Iniciativa para recuperar especies nativas en ríos y lagunas de la región.</p>
                    <a href="#" class="btn">Más información</a>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <h3>Canales de Comercialización</h3>
                    <p>Apoyo a productores para acceder a mercados locales y regionales.</p>
                    <a href="#" class="btn">Más información</a>
                </div>
            </div>
        </section>
        
        <section id="contacto">
            <h2 class="section-title">Contáctanos</h2>
            
            <div class="contact-form">
                <form id="pisciculturaForm">
                    <div class="form-group">
                        <label for="nombre">Nombre completo</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono">
                    </div>
                    
                    <div class="form-group">
                        <label for="interes">Área de interés</label>
                        <select id="interes" name="interes">
                            <option value="asesoria">Asesoría técnica</option>
                            <option value="alevines">Compra de alevines</option>
                            <option value="capacitacion">Capacitación</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn">Enviar</button>
                </form>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="footer-links">
            <a href="#" class="footer-link">Política de Privacidad</a>
            <a href="#" class="footer-link">Términos de Servicio</a>
        </div>
        <div class="social-icons">
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
        </div>
        <p>&copy; 2023 Piscicultura Municipal. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
