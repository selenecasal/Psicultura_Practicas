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

.titulo h1{

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
  <section id="especies" class="contenedor fade-in" tabindex="0" aria-label="Especies y Trabajo Técnico">
    <h2>Especies y Trabajo Técnico</h2>
    <div class="grid md:grid-cols-3 gap-8 mt-4">
      <article class="species-card" tabindex="0" aria-label="Pejerrey">
        <img src="img/pejerrey.jpeg" alt="Pejerrey" class="w-full h-[300px] object-cover" />
        <div class="p-6 flex flex-col">
          <h3>Pejerrey</h3>
          <p>Reproducción natural desde septiembre, extracción diaria de ovas y crianza en copas de incubación.</p>
        </div>
      </article>
      <article class="species-card" tabindex="0" aria-label="Bagre Sapo">
        <img src="img/bagre.jpg" alt="Bagre Sapo" class="w-full h-[300px] object-cover" />
        <div class="p-6 flex flex-col">
          <h3>Bagre Sapo</h3>
          <p>Cría y manejo en estanques controlando agua, alimentación y salud de la especie.</p>
        </div>
      </article>
      <article class="species-card" tabindex="0" aria-label="Especies Ornamentales">
        <img src="img/pescao.jpeg" alt="Especies Ornamentales" class="w-full h-[300px] object-cover" />
        <div class="p-6 flex flex-col">
          <h3>Especies Ornamentales</h3>
          <p>Mojarras, carassius, axolotes, corydoras, morenita madrecita, bagre cantor, anguila, ranas, camarones, chanchitas, caracoles manzana y peces tropicales.</p>
        </div>
      </article>
    </div>
  </section>

  <!-- Procesos -->
  <section id="procesos" class="contenedor fade-in" tabindex="0" aria-label="Procesos y Áreas Específicas">
    <h2>Procesos y Áreas Específicas</h2>
    <img src="img/acuaponico.jpg" alt="Acuaponía" class="img-1200x600" />
    <p><strong>Acuaponía:</strong> Agua circula desde una pileta con especies nativas a filtros y luego alimenta plantas en film nutritivo, balsa flotante y sustrato fijo. Las raíces absorben nutrientes y el agua vuelve purificada.</p>
    <p><strong>Fitoremediación:</strong> Agua de los estanques pasa por plantas sumergidas, palustres o flotantes que absorben amonio, amoníaco, nitritos y nitratos. Se aplica en reproductores de pejerrey.</p>
    <p><strong>Circuito de agua:</strong> Estanques de cemento con circulación abierta; calidad del agua controlada anualmente mediante análisis del pozo y vigilancia de enfermedades.</p>
  </section>

  <!-- Educación Ambiental -->
  <section id="educacion" class="contenedor fade-in" tabindex="0" aria-label="Educación Ambiental">
    <h2>Educación Ambiental</h2>
    <img src="img/WhatsApp Image 2025-10-07 at 11.38.44.jpeg" alt="Educación Ambiental" class="img-1200x600" />
    <p>Se concientiza sobre el cuidado del recurso natural y las especies. Charlas educativas para todos los niveles, vinculadas con acuaponía y fitoremediación.</p>
    <p>Impacto positivo: repoblación de ambientes naturales con especies sometidas a presión de pesca.</p>
  </section>

  <!-- Visitas -->
  <section id="visitas" class="contenedor fade-in" tabindex="0" aria-label="Visitas Guiadas y Comunidad">
    <h2>Visitas Guiadas y Comunidad</h2>
    <img src="img/pisicultura.jpeg" alt="Visitas Guiadas" class="img-1200x600" />
    <p>Se reciben escuelas, turistas, investigadores y público general. Las visitas incluyen recorrido sectorizado, explicación de especies y curiosidades.</p>
    <p>Mensaje principal: <strong>El Río Quequén es un recurso agotable; la Estación contribuye a preservar especies emblemáticas como el pejerrey.</strong></p>
  </section>

  <div class="separador"></div>

  <!-- Futuro -->
  <section id="futuro" class="contenedor fade-in" tabindex="0" aria-label="Perspectiva Personal y Futuro">
    <h2>Perspectiva Personal y Futuro</h2>
    <img src="img/carapa.jpeg" alt="Futuro" class="img-1200x600" />
    <p>Trabajar en la Estación permite aplicar conocimientos diariamente y enseñar sobre conservación a nuevas generaciones.</p>
    <p>Desafíos: cortes eléctricos, insumos y cuidado de animales.</p>
    <p>Proyectos: ampliar sistemas de recirculación con energías amigables, cría en jaulas flotantes, nuevos biodigestores, charlas didácticas y reactivación de convenios con universidades y clubes de pesca.</p>
  </section>

</main>

<!-- Footer fijo -->
<footer class="footer-violeta container mx-auto">
  <p>&copy; 2025 Estación de Piscicultura de Necochea - Municipalidad</p>
</footer>

</body>
</html>
