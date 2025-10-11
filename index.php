<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Estación de Piscicultura - Municipalidad</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
    :root {
  --color-principal: #670066;
  --color-hover: #950095;
  --color-texto: #7A7A7A;
  --color-enfasis: #C66CC5;
  --bg-pagina: #FFFFFF;
  --bg-contenedor: #FFF7FF;
  --borde-contenedor: #FF90FE;
  --footer-bg: #670066;
}

html, body {
  margin: 0;
  padding: 0;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  background-color: var(--bg-pagina);
  color: var(--color-texto);
  height: 100%;
}

body {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

header{
  display:flex;
  flex-direction: row;
   /* position: fixed; altavergamalhecha*/ 
  
}
.titulo{  
  margin-top:3vh;
  width: 70%;
}


header.header-violeta {
  width: 100%;
  background: linear-gradient(135deg, #670066 0%, #950095 100%);
  padding: 30px 20px;
  border-radius: 0 0 14px 14px;
  box-shadow: 0 8px 20px rgb(103 0 102 / 0.5);
  text-align: center;
}

header.header-violeta h1 {
  font-weight: 700;
  font-size: 28px;
  color: white;
  letter-spacing: 1.2px;
  text-shadow: 0 2px 6px rgba(0,0,0,0.3);
  margin: 0;
  
}

header.header-violeta p {
  font-size: 20px;
  font-weight: 400;
  color: #EED9F1;
  margin: 0.5rem 0 0 0;
  letter-spacing: 0.5px;
}

main {
  flex: 1; /* ocupa todo el espacio disponible */
  max-width: 1200px;
  margin: 0 auto;
  width: 100%;
  padding: 20px;
  box-sizing: border-box;
}

h2 {
  font-weight: 500;
  font-size: 20px;
  color: var(--color-principal);
  margin-bottom: 1rem;
  border-bottom: 2px solid var(--color-enfasis);
  padding-bottom: 0.3rem;
}

p {
  font-weight: 400;
  font-size: 18px;
  margin-bottom: 1rem;
}

.contenedor {
  background-color: var(--bg-contenedor);
  border: 1.5px solid var(--borde-contenedor);
  border-radius: 12px;
  padding: 28px 30px;
  margin-bottom: 40px;
  box-shadow: 0 6px 15px rgb(255 144 254 / 0.15);
  transition: box-shadow 0.3s ease;
}

.contenedor:hover {
  box-shadow: 0 10px 30px rgb(198 108 197 / 0.3);
}

.icono-pez {
  width: 120px;
  height: 120px;
  margin: auto;
  transition: transform 0.3s ease;
  filter: drop-shadow(0 3px 6px rgba(0,0,0,0.2));
}
.icono-pez:hover {
  transform: scale(1.08);
}
.modal {
  position: fixed;
  inset: 0;
  display: none;
  background-color: rgba(0,0,0,0.6);
  align-items: center;
  justify-content: center;
  z-index: 50;
}
.modal.active {
  display: flex;
}
.modal-content {
  background: white;
  border-radius: 12px;
  max-width: 800px;
  width: 95%;
  padding: 20px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.3);
  animation: fadeIn 0.3s ease-out;
}
@keyframes fadeIn {
  from {opacity:0; transform:scale(0.9);}
  to {opacity:1; transform:scale(1);}
}
.modal-gallery img {
  border-radius: 8px;
  width: 180px;
  height: 120px;
  object-fit: cover;
  transition: transform 0.3s ease;
}
.modal-gallery img:hover {
  transform: scale(1.05);
}
.btn-cerrar {
  background-color: var(--color-principal);
  color: white;
  padding: 8px 16px;
  border-radius: 6px;
  margin-top: 20px;
  float: right;
}
.btn-cerrar:hover {
  background-color: var(--color-hover);
}
.btn {
  background-color: var(--color-principal);
  color: white;
  padding: 12px 28px;
  border-radius: 6px;
  font-weight: 500;
  text-decoration: none;
  transition: background-color 0.3s ease, box-shadow 0.3s ease;
  display: inline-block;
  box-shadow: 0 3px 8px rgb(103 0 102 / 0.4);
  margin-top: 1rem;
}

.btn:hover {
  background-color: var(--color-hover);
  box-shadow: 0 6px 15px rgb(149 0 149 / 0.6);
}

footer.footer-violeta {
  width: 100%;
  background-color: var(--footer-bg);
  color: white;
  text-align: center;
  padding: 20px;
  border-radius: 14px 14px 0 0;
  box-shadow: 0 -6px 20px rgb(103 0 102 / 0.5);
}

footer.footer-violeta p {
  margin: 0;
  font-size: 16px;
}

.fade-in {
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 0.8s forwards;
  animation-delay: 0.2s;
}

@keyframes fadeInUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.species-card {
  background-color: white;
  border: 1.5px solid var(--borde-contenedor);
  border-radius: 14px;
  overflow: hidden;
  transition: transform 0.35s ease, border-color 0.35s ease, box-shadow 0.35s ease;
  box-shadow: 0 4px 12px rgb(0 0 0 / 0.07);
  display: flex;
  flex-direction: column;
}

.species-card:hover {
  transform: translateY(-8px);
  border-color: var(--color-enfasis);
  box-shadow: 0 12px 30px rgb(198 108 197 / 0.35);
}

.species-card h3 {
  color: var(--color-principal);
  transition: color 0.3s ease;
  font-weight: 500;
  font-size: 20px;
  margin-bottom: 0.5rem;
}

.species-card:hover h3 {
  color: var(--color-enfasis);
}

.species-card p {
  flex-grow: 1;
  font-size: 17px;
  color: #555555;
}

.img-1200x600 {
  width: 100%;
  height: 350px;
  object-fit: cover;
  border-radius: 12px;
  box-shadow: 0 6px 15px rgb(0 0 0 / 0.1);
  transition: transform 0.3s ease;
  margin-bottom: 1rem;
}

.img-1200x600:hover {
  transform: scale(1.03);
}

.container {
  max-width: 1200px;
  margin-left: auto;
  margin-right: auto;
}

.separador {
  height: 2px;
  background: var(--color-enfasis);
  margin: 40px 0;
  border-radius: 4px;
}
.header-violeta img{
  width: 20%;
  filter: brightness(0) saturate(100%) invert(100%) sepia(0%) saturate(0%) hue-rotate(32deg) brightness(102%) contrast(108%);
}

</style>
</head>
<body>

<!-- Header fijo -->
<header class="header-violeta container mx-auto">
  <img src="img/logo_neco.svg" alt="">
  <div class="titulo">
  <h1>Estación de Piscicultura de Necochea</h1>
  <p>Preservación y desarrollo de especies acuáticas locales</p>
  </div>
</header>

<!-- Contenido principal -->
<main class="container mx-auto">

  <!-- Historia -->
  <section id="historia" class="contenedor fade-in" tabindex="0" aria-label="Historia e Inauguración">
    <h2>Historia e Inauguración</h2>
    <img src="img/piscicultura.jpeg" alt="Río Quequén" class="img-1200x600" />
    <p>La Estación de Piscicultura se inauguró el <strong>13 de noviembre de 1983</strong> junto con el Complejo Turístico Las Cascadas en el Parque Cura-Meucó.</p>
    <p>Incluía instalaciones sanitarias, vivienda del casero, fogones, canchas de bochas, el camino ribereño y la Estación, en la margen derecha del Río Quequén.</p>
    <p>Su construcción se retrasó por la <strong>inundación de 1980</strong> y el puente Ardanaz. El motivo principal fue <strong>mitigar la presión de pesca y repoblar el río con truchas arco iris y pejerreyes</strong>.</p>
    <p>Instituciones involucradas: <strong>Club de Pesca, pescadores y Municipalidad de Necochea</strong>. Momentos clave: crecientes del río en 1980, 2012 y 2016.</p>
  </section>

  <!-- Especies -->
  <section id="especies" class="contenedor text-center">
    <h2 class="text-2xl font-semibold text-[var(--color-principal)] mb-6">Especies de la Estación</h2>

    <div class="grid md:grid-cols-3 gap-10">
      <!-- Card Pejerrey -->
      <div class="cursor-pointer" onclick="abrirModal('pejerrey')">
        <img src="img/icon_pejerrey.svg" alt="Pejerrey" class="icono-pez" />
        <h3 class="mt-3 text-xl font-medium text-[var(--color-principal)]">Pejerrey</h3>
      </div>

      <!-- Card Bagre -->
      <div class="cursor-pointer" onclick="abrirModal('bagre')">
        <img src="img/icon_bagre.svg" alt="Bagre Sapo" class="icono-pez" />
        <h3 class="mt-3 text-xl font-medium text-[var(--color-principal)]">Bagre Sapo</h3>
      </div>

      <!-- Card Ornamentales -->
      <div class="cursor-pointer" onclick="abrirModal('ornamentales')">
        <img src="img/icon_ornamentales.svg" alt="Especies Ornamentales" class="icono-pez" />
        <h3 class="mt-3 text-xl font-medium text-[var(--color-principal)]">Ornamentales</h3>
      </div>
    </div>
  </section>
  <!-- MODALES -->
  <div id="modal-pejerrey" class="modal">
    <div class="modal-content">
      <h3 class="text-2xl font-semibold text-[var(--color-principal)] mb-2">Pejerrey</h3>
      <p>Reproducción natural desde septiembre, extracción diaria de ovas y crianza en copas de incubación.</p>
      <div class="modal-gallery flex flex-wrap gap-3 justify-center mt-4">
        <img src="img/pejerrey.jpeg" alt="">
        <img src="img/pejerrey2.jpeg" alt="">
        <img src="img/pejerrey3.jpeg" alt="">
      </div>
      <button class="btn-cerrar" onclick="cerrarModal('pejerrey')">Cerrar</button>
    </div>
  </div>

  <div id="modal-bagre" class="modal">
    <div class="modal-content">
      <h3 class="text-2xl font-semibold text-[var(--color-principal)] mb-2">Bagre Sapo</h3>
      <p>Cría y manejo en estanques controlando agua, alimentación y salud de la especie.</p>
      <div class="modal-gallery flex flex-wrap gap-3 justify-center mt-4">
        <img src="img/bagre.jpg" alt="">
        <img src="img/bagre2.jpg" alt="">
        <img src="img/bagre3.jpg" alt="">
      </div>
      <button class="btn-cerrar" onclick="cerrarModal('bagre')">Cerrar</button>
    </div>
  </div>

  <div id="modal-ornamentales" class="modal">
    <div class="modal-content">
      <h3 class="text-2xl font-semibold text-[var(--color-principal)] mb-2">Especies Ornamentales</h3>
      <p>Mojarras, carassius, axolotes, corydoras, morenita madrecita, bagre cantor, anguila, ranas, camarones, chanchitas, caracoles manzana y peces tropicales.</p>
      <div class="modal-gallery flex flex-wrap gap-3 justify-center mt-4">
        <img src="img/pescao.jpeg" alt="">
        <img src="img/ornamental2.jpg" alt="">
        <img src="img/ornamental3.jpg" alt="">
      </div>
      <button class="btn-cerrar" onclick="cerrarModal('ornamentales')">Cerrar</button>
    </div>
  </div>

  <!-- Procesos -->
<section id="procesos" class="relative py-16 bg-gradient-to-b from-[#f8f9fa] to-[#e8f3ec] text-gray-800">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-4xl font-extrabold text-[#3a3a3a] mb-10 tracking-tight">
      Procesos y Áreas Específicas
    </h2>

    <!-- Imagen principal -->
    <div class="relative overflow-hidden rounded-2xl shadow-xl mb-12">
      <img src="img/acuaponico.jpg" alt="Sistema Acuapónico" class="w-full h-[450px] object-cover hover:scale-105 transition-transform duration-700 ease-in-out">
      <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
        <p class="text-white text-xl font-medium drop-shadow-md">Innovación y sustentabilidad en acción</p>
      </div>
    </div>

    <!-- Tarjetas de procesos -->
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Acuaponía -->
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300">
        <h3 class="text-2xl font-bold text-[#670066] mb-3">Acuaponía</h3>
        <p class="text-gray-700 mb-5">Sistema que integra peces y plantas en un circuito cerrado de agua, donde los desechos de los peces nutren las plantas y éstas purifican el agua.</p>
        <button onclick="abrirModal('modalAcuaponia')" class="px-5 py-2 bg-[#670066] text-white rounded-lg hover:bg-[#53004d] transition">Ver más</button>
      </div>

      <!-- Fitoremediación -->
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300">
        <h3 class="text-2xl font-bold text-[#00753a] mb-3">Fitoremediación</h3>
        <p class="text-gray-700 mb-5">Proceso natural en el que plantas acuáticas absorben y transforman compuestos como amonio, nitritos y nitratos, mejorando la calidad del agua.</p>
        <button onclick="abrirModal('modalFitoremediacion')" class="px-5 py-2 bg-[#00753a] text-white rounded-lg hover:bg-[#005d2f] transition">Ver más</button>
      </div>

      <!-- Circuito de agua -->
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300">
        <h3 class="text-2xl font-bold text-[#005f99] mb-3">Circuito de Agua</h3>
        <p class="text-gray-700 mb-5">El agua fluye entre estanques de cemento, manteniendo una circulación controlada y analizada para asegurar la salud de las especies.</p>
        <button onclick="abrirModal('modalCircuito')" class="px-5 py-2 bg-[#005f99] text-white rounded-lg hover:bg-[#004d7a] transition">Ver más</button>
      </div>
    </div>
  </div>

  <!-- Modales -->
  <!-- Acuaponía -->
  <div id="modalAcuaponia" class="modal hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-2xl max-w-xl mx-4 shadow-2xl text-left">
      <h3 class="text-2xl font-bold text-[#670066] mb-4">Acuaponía</h3>
      <p class="text-gray-700 mb-4">
        Este sistema combina la acuicultura (cría de peces) con la hidroponía (cultivo de plantas sin suelo) en un ecosistema circular. 
        El agua de los estanques con especies nativas se filtra y nutre las plantas cultivadas en balsas flotantes o sustratos fijos. 
        Las raíces absorben los nutrientes y el agua regresa purificada, creando un ciclo sostenible y eficiente.
      </p>
      <button onclick="cerrarModal('modalAcuaponia')" class="mt-3 px-4 py-2 bg-[#670066] text-white rounded-lg hover:bg-[#53004d]">Cerrar</button>
    </div>
  </div>

  <!-- Fitoremediación -->
  <div id="modalFitoremediacion" class="modal hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-2xl max-w-xl mx-4 shadow-2xl text-left">
      <h3 class="text-2xl font-bold text-[#00753a] mb-4">Fitoremediación</h3>
      <p class="text-gray-700 mb-4">
        Las plantas acuáticas actúan como filtros biológicos naturales. Absorben sustancias como amoníaco, nitritos y nitratos, 
        reduciendo su concentración en el agua. Este método se aplica especialmente en estanques con reproductores de pejerrey, 
        garantizando un ambiente saludable y equilibrado.
      </p>
      <button onclick="cerrarModal('modalFitoremediacion')" class="mt-3 px-4 py-2 bg-[#00753a] text-white rounded-lg hover:bg-[#005d2f]">Cerrar</button>
    </div>
  </div>

  <!-- Circuito de Agua -->
  <div id="modalCircuito" class="modal hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-2xl max-w-xl mx-4 shadow-2xl text-left">
      <h3 class="text-2xl font-bold text-[#005f99] mb-4">Circuito de Agua</h3>
      <p class="text-gray-700 mb-4">
        Los estanques de cemento operan con un sistema de circulación abierta. El agua proviene de un pozo controlado, 
        se analiza anualmente y se monitorea constantemente para prevenir enfermedades. 
        Este circuito garantiza un flujo adecuado y condiciones óptimas para el bienestar de las especies.
      </p>
      <button onclick="cerrarModal('modalCircuito')" class="mt-3 px-4 py-2 bg-[#005f99] text-white rounded-lg hover:bg-[#004d7a]">Cerrar</button>
    </div>
  </div>
</section>


  <!-- Educación Ambiental -->
<section id="educacion" class="relative py-16 bg-gradient-to-b from-[#e8f3ec] to-[#f0f9f5] text-gray-800">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-4xl font-extrabold text-[#3a3a3a] mb-10 tracking-tight">
      Educación Ambiental
    </h2>

    <!-- Imagen destacada -->
    <div class="relative overflow-hidden rounded-2xl shadow-xl mb-12">
      <img src="img/WhatsApp Image 2025-10-07 at 11.38.44.jpeg" alt="Educación Ambiental" class="w-full h-[450px] object-cover hover:scale-105 transition-transform duration-700 ease-in-out">
      <div class="absolute inset-0 bg-black/25 flex items-center justify-center">
        <p class="text-white text-xl font-medium drop-shadow-md">Conciencia y cuidado del entorno</p>
      </div>
    </div>

    <!-- Tarjetas informativas -->
    <div class="grid md:grid-cols-2 gap-8">
      <!-- Charlas educativas -->
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300">
        <h3 class="text-2xl font-bold text-[#00753a] mb-3">Charlas Educativas</h3>
        <p class="text-gray-700 mb-5">
          Se promueve la concientización sobre el cuidado de los recursos naturales y las especies locales. 
          Las actividades están diseñadas para todos los niveles educativos, vinculando teoría y práctica con acuaponía y fitoremediación.
        </p>
        <button onclick="abrirModal('modalCharlas')" class="px-5 py-2 bg-[#00753a] text-white rounded-lg hover:bg-[#005d2f] transition">Ver más</button>
      </div>

      <!-- Impacto positivo -->
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300">
        <h3 class="text-2xl font-bold text-[#005f99] mb-3">Impacto Positivo</h3>
        <p class="text-gray-700 mb-5">
          Los programas educativos contribuyen a la repoblación de ambientes naturales, protegiendo especies que están sometidas a presión de pesca. 
          Se fortalece la conexión entre la comunidad y el entorno natural.
        </p>
        <button onclick="abrirModal('modalImpacto')" class="px-5 py-2 bg-[#005f99] text-white rounded-lg hover:bg-[#004d7a] transition">Ver más</button>
      </div>
    </div>
  </div>

  <!-- Modales -->
  <!-- Charlas Educativas -->
  <div id="modalCharlas" class="modal hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-2xl max-w-xl mx-4 shadow-2xl text-left">
      <h3 class="text-2xl font-bold text-[#00753a] mb-4">Charlas Educativas</h3>
      <p class="text-gray-700 mb-4">
        Las charlas están orientadas a todos los niveles educativos, desde escuelas primarias hasta adultos de la comunidad. 
        Se combinan explicaciones teóricas sobre acuaponía y fitoremediación con actividades prácticas, fomentando la comprensión y la participación activa.
      </p>
      <button onclick="cerrarModal('modalCharlas')" class="mt-3 px-4 py-2 bg-[#00753a] text-white rounded-lg hover:bg-[#005d2f]">Cerrar</button>
    </div>
  </div>

  <!-- Impacto Positivo -->
  <div id="modalImpacto" class="modal hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-2xl max-w-xl mx-4 shadow-2xl text-left">
      <h3 class="text-2xl font-bold text-[#005f99] mb-4">Impacto Positivo</h3>
      <p class="text-gray-700 mb-4">
        La educación ambiental permite que la comunidad participe activamente en la conservación de especies locales. 
        La repoblación de ambientes naturales contribuye a la sostenibilidad del ecosistema y fortalece la conexión entre personas y naturaleza.
      </p>
      <button onclick="cerrarModal('modalImpacto')" class="mt-3 px-4 py-2 bg-[#005f99] text-white rounded-lg hover:bg-[#004d7a]">Cerrar</button>
    </div>
  </div>
</section>


<!-- Visitas Guiadas y Comunidad -->
<section id="visitas" class="relative py-16 bg-gradient-to-b from-[#f0f9f5] to-[#e8f3ec] text-gray-800">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-4xl font-extrabold text-[#3a3a3a] mb-10 tracking-tight">
      Visitas Guiadas y Comunidad
    </h2>

    <!-- Imagen destacada -->
    <div class="relative overflow-hidden rounded-2xl shadow-xl mb-12">
      <img src="img/pisicultura.jpeg" alt="Visitas Guiadas" class="w-full h-[450px] object-cover hover:scale-105 transition-transform duration-700 ease-in-out">
      <div class="absolute inset-0 bg-black/25 flex items-center justify-center">
        <p class="text-white text-xl font-medium drop-shadow-md">Conectando comunidad y naturaleza</p>
      </div>
    </div>

    <!-- Tarjetas informativas -->
    <div class="grid md:grid-cols-2 gap-8">
      <!-- Recorridos guiados -->
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300">
        <h3 class="text-2xl font-bold text-[#670066] mb-3">Recorridos Guiados</h3>
        <p class="text-gray-700 mb-5">
          La Estación recibe escuelas, turistas, investigadores y público general. 
          Cada visita incluye un recorrido sectorizado con explicación de especies, curiosidades y prácticas de conservación.
        </p>
        <button onclick="abrirModal('modalRecorridos')" class="px-5 py-2 bg-[#670066] text-white rounded-lg hover:bg-[#53004d] transition">Ver más</button>
      </div>

      <!-- Mensaje de concientización -->
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300">
        <h3 class="text-2xl font-bold text-[#005f99] mb-3">Concientización Ambiental</h3>
        <p class="text-gray-700 mb-5">
          <strong>El Río Quequén es un recurso agotable <br>y el pejerrey una especie emblemática.</strong><br>
          Las visitas buscan reforzar la conexión de la comunidad con el entorno natural y promover prácticas sostenibles.
        </p>
        <button onclick="abrirModal('modalConciencia')" class="px-5 py-2 bg-[#005f99] text-white rounded-lg hover:bg-[#004d7a] transition">Ver más</button>
      </div>
    </div>
  </div>

  <!-- Modales -->
  <!-- Recorridos Guiados -->
  <div id="modalRecorridos" class="modal hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-2xl max-w-xl mx-4 shadow-2xl text-left">
      <h3 class="text-2xl font-bold text-[#670066] mb-4">Recorridos Guiados</h3>
      <p class="text-gray-700 mb-4">
        Durante las visitas, se realiza un recorrido detallado por los distintos sectores de la Estación. 
        Los visitantes aprenden sobre las especies locales, sus ciclos de vida y la importancia de la conservación. 
        Se incluyen demostraciones prácticas de acuaponía, fitoremediación y manejo del circuito de agua.
      </p>
      <button onclick="cerrarModal('modalRecorridos')" class="mt-3 px-4 py-2 bg-[#670066] text-white rounded-lg hover:bg-[#53004d]">Cerrar</button>
    </div>
  </div>

  <!-- Concientización Ambiental -->
  <div id="modalConciencia" class="modal hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-2xl max-w-xl mx-4 shadow-2xl text-left">
      <h3 class="text-2xl font-bold text-[#005f99] mb-4">Concientización Ambiental</h3>
      <p class="text-gray-700 mb-4">
        El objetivo principal es que los visitantes comprendan la fragilidad del Río Quequén y la importancia de conservar especies emblemáticas como el pejerrey. 
        Se fomenta la educación ambiental y el compromiso de la comunidad en la protección del entorno natural mediante prácticas sostenibles.
      </p>
      <button onclick="cerrarModal('modalConciencia')" class="mt-3 px-4 py-2 bg-[#005f99] text-white rounded-lg hover:bg-[#004d7a]">Cerrar</button>
    </div>
  </div>
</section>


  <div class="separador"></div>

<!-- Perspectiva Personal y Futuro -->
<section id="futuro" class="relative py-16 bg-gradient-to-b from-[#e8f3ec] to-[#f0f9f5] text-gray-800">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-4xl font-extrabold text-[#3a3a3a] mb-10 tracking-tight">
      Perspectiva Personal y Futuro
    </h2>

    <!-- Imagen destacada -->
    <div class="relative overflow-hidden rounded-2xl shadow-xl mb-12">
      <img src="img/carapa.jpeg" alt="Perspectiva y Futuro" class="w-full h-[450px] object-cover hover:scale-105 transition-transform duration-700 ease-in-out">
      <div class="absolute inset-0 bg-black/25 flex items-center justify-center">
        <p class="text-white text-xl font-medium drop-shadow-md">Innovación, aprendizaje y sostenibilidad</p>
      </div>
    </div>

    <!-- Tarjetas informativas -->
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Experiencia personal -->
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300">
        <h3 class="text-2xl font-bold text-[#670066] mb-3">Experiencia Personal</h3>
        <p class="text-gray-700 mb-5">
          Trabajar en la Estación permite aplicar conocimientos diariamente y transmitir la importancia de la conservación a nuevas generaciones.
        </p>
        <button onclick="abrirModal('modalExperiencia')" class="px-5 py-2 bg-[#670066] text-white rounded-lg hover:bg-[#53004d] transition">Ver más</button>
      </div>

      <!-- Desafíos -->
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300">
        <h3 class="text-2xl font-bold text-[#00753a] mb-3">Desafíos</h3>
        <p class="text-gray-700 mb-5">
          La Estación enfrenta cortes eléctricos, gestión de insumos y el cuidado constante de las especies, lo que requiere planificación y adaptabilidad.
        </p>
        <button onclick="abrirModal('modalDesafios')" class="px-5 py-2 bg-[#00753a] text-white rounded-lg hover:bg-[#005d2f] transition">Ver más</button>
      </div>

      <!-- Proyectos futuros -->
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300">
        <h3 class="text-2xl font-bold text-[#005f99] mb-3">Proyectos Futuros</h3>
        <p class="text-gray-700 mb-5">
          Ampliación de sistemas de recirculación con energías sostenibles, cría en jaulas flotantes, instalación de nuevos biodigestores, charlas didácticas y reactivación de convenios con universidades y clubes de pesca.
        </p>
        <button onclick="abrirModal('modalProyectos')" class="px-5 py-2 bg-[#005f99] text-white rounded-lg hover:bg-[#004d7a] transition">Ver más</button>
      </div>
    </div>
  </div>

  <!-- Modales -->
  <!-- Experiencia Personal -->
  <div id="modalExperiencia" class="modal hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-2xl max-w-xl mx-4 shadow-2xl text-left">
      <h3 class="text-2xl font-bold text-[#670066] mb-4">Experiencia Personal</h3>
      <p class="text-gray-700 mb-4">
        La experiencia en la Estación permite combinar aprendizaje práctico con la enseñanza sobre conservación, incentivando el interés por la ecología en jóvenes y adultos. 
        Cada día se aplican conocimientos en acuaponía, fitoremediación y manejo de especies.
      </p>
      <button onclick="cerrarModal('modalExperiencia')" class="mt-3 px-4 py-2 bg-[#670066] text-white rounded-lg hover:bg-[#53004d]">Cerrar</button>
    </div>
  </div>

  <!-- Desafíos -->
  <div id="modalDesafios" class="modal hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-2xl max-w-xl mx-4 shadow-2xl text-left">
      <h3 class="text-2xl font-bold text-[#00753a] mb-4">Desafíos</h3>
      <p class="text-gray-700 mb-4">
        Los principales desafíos incluyen interrupciones eléctricas, disponibilidad y gestión de insumos, y el cuidado diario de los animales. 
        Superarlos requiere coordinación, planificación y adaptación constante.
      </p>
      <button onclick="cerrarModal('modalDesafios')" class="mt-3 px-4 py-2 bg-[#00753a] text-white rounded-lg hover:bg-[#005d2f]">Cerrar</button>
    </div>
  </div>

  <!-- Proyectos Futuros -->
  <div id="modalProyectos" class="modal hidden fixed inset-0 bg-black/70 flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-2xl max-w-xl mx-4 shadow-2xl text-left">
      <h3 class="text-2xl font-bold text-[#005f99] mb-4">Proyectos Futuros</h3>
      <p class="text-gray-700 mb-4">
        Los proyectos incluyen ampliar sistemas de recirculación usando energías sostenibles, implementar cría en jaulas flotantes, instalar nuevos biodigestores, ofrecer charlas didácticas y reactivar convenios con universidades y clubes de pesca, fortaleciendo la educación ambiental y la sostenibilidad de la Estación.
      </p>
      <button onclick="cerrarModal('modalProyectos')" class="mt-3 px-4 py-2 bg-[#005f99] text-white rounded-lg hover:bg-[#004d7a]">Cerrar</button>
    </div>
  </div>
</section>


</main>

<!-- Footer fijo -->
<footer class="footer-violeta container mx-auto">
  <p>&copy; 2025 Estación de Piscicultura de Necochea - Municipalidad</p>
</footer>
<script>
function abrirModal(nombre) {
  document.getElementById(`modal-${nombre}`).classList.add('active');
}
function cerrarModal(nombre) {
  document.getElementById(`modal-${nombre}`).classList.remove('active');
}
  function abrirModal(id) {
    document.getElementById(id).classList.remove('hidden');
  }
  function cerrarModal(id) {
    document.getElementById(id).classList.add('hidden');
  }


</script>
</body>
</html>
