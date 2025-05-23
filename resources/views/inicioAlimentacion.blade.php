<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Inicio</title>

    <link rel="stylesheet" href="{{ asset('css/Header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Inicio.css') }}">
    
</head>
<header>
  <div class="logo-container">
      <a href="/inicio-de-sesion/Modulo-iniciar-sesion/home/home.html"><img href="/inicio-de-sesion/Modulo-iniciar-sesion/home/home.html" src="Inclued/lOGO.jpg" alt="Logo" class="logo"></a>
     
  </div>
  <button class="hamburger" onclick="toggleHamburgerMenu()">☰</button>
  <nav class="nav-links">
      <a href="/inicio-de-sesion/Modulo-iniciar-sesion/home/home.html" class="nav-item">Inicio</a>
      <div class="nav-item modules-item" onclick="toggleModules()">Módulos</div>
      <a href="/mapa-de-suenos/todohh/inicio/link/quienessomos.html" class="nav-item  ">Acerca de </a>
      <a href="/mapa-de-suenos/todohh/inicio/link/contacto.html" class="nav-item ">Contacto</a>
      <div id="modules-indicator" class="modules-indicator"></div>
      
  </nav>
  <div class="nav-right">
     
      
  </div>
  <div class="profile-container">
      <div class="profile-box">
          <a href="#nombre" class="nav-item special-item profile-name">Jhon Sebastian</a>
          <img src="https://media-bog2-2.cdn.whatsapp.net/v/t61.24694-24/464251565_515510564641224_6041331179142873332_n.jpg?ccb=11-4&oh=01_Q5AaICnwz63t7DHwbUzq6FWac1TQ_I-SzEdUmOnmaAtiBuu0&oe=6741C773&_nc_sid=5e03e0&_nc_cat=104" alt="Foto de perfil" class="profile-pic" onclick="toggleProfileMenu()">
          <div id="profile-menu" class="profile-menu">
              <a href="">Perfil</a>
              <a href="#cerrar-sesion">Cerrar sesión</a>
          </div>
      </div>
  </div>
  <!-- Menú hamburguesa -->
<div id="hamburger-menu" class="hamburger-menu">
<a href="/inicio-de-sesion/Modulo-iniciar-sesion/home/home.html" class="hamburger-item">Inicio</a>
<a href="#"><div class="hamburger-item" onclick="toggleModulues()">Módulos</div></a>
<!-- Contenedor de módulos (oculto por defecto) -->
<div id="modules-content" class="modules-content" style="display: none;">
  <a href="/mapa-de-suenos/Inicio/Inicio.html"><div class="modulo">Mapa de sueños</div></a>
  <a href="/alimentacion/Inicio/index.html"><div class="modulo">Alimentación</div></a>
  <a href="/musicoterapia/Vistas1.1/bienvenido_a_musicoterapia.html"><div class="modulo">Musicoterapia</div></a>
  <a href="/rutinas-de-ejercicios/inicio/index.html"><div class="modulo">Ejercicios</div></a>
  <a href="/atencion-profesional/USUARIO/Home_Usuario/HomeUsuario.html"><div class="modulo">Atención Profesional</div></a>
</div>
<a href="#perfil" class="hamburger-item">Perfil</a>
</div>
  <!-- Pestaña de módulos -->
  <div id="modules-overlay" class="modules-overlay">
      <div class="module-grid">
         <a href="/mapa-de-suenos/Inicio/Inicio.html"> <div class="module">Mapa de sueños</div></a>
         <a href="/alimentacion/Inicio/index.html"><div class="module">Alimentación</div></a>
          <a href="/musicoterapia/Vistas1.1/bienvenido_a_musicoterapia.html"><div class="module">Musicoterapia</div></a>
          <a href="/rutinas-de-ejercicios/inicio/index.html"><div class="module">Ejercicios</div></a>
          <a href="/atencion-profesional/USUARIO/Home_Usuario/HomeUsuario.html"><div class="module">Atención Profesional</div></a>
      </div>
  </div>
</header>

<body> 
    
     <!-- Carrusel de texto motivacional -->
     <div class="motivational-container">
        <div class="motivational-text" id="textCarousel">
            <p>"La tranquilidad comienza con una buena alimentación."</p>
            <p>"Cuida tu cuerpo, es el único lugar donde tienes que vivir."</p>
            <p>"Cada pequeño paso hacia una mejor alimentación es un gran paso hacia tu bienestar."</p>
        </div>
    </div>
    
  <main>
    <a href="{{ route('frutas') }}">
      <section class="card" id="alimentos">
          <img src="Inclued/FrutasInf.jpg" class="imagen-redondeada" alt="Informacion"> 
          <h2>Informacion Frutas</h2>
          <p>Los usuarios podrán identificar cómo ciertos alimentos influyen en su estado de ánimo, niveles de energía y salud del organismo. 
            Esta herramienta ayuda a establecer hábitos alimenticios saludables 
            que contribuyen a reducir el estrés, mejorar la concentración y fortalecer el sistema inmunológico.</p>
      </section></a>

      <a href="{{ route('seguimiento') }}">
        <section class="card" id="seguimiento">
            <img src="Inclued/SEGUIMIENTO copy.png" class="imagen-redondeada" alt="Seguimiento"> 
            <h2>Seguimiento de proceso</h2>
            <p>El seguimiento de proceso permitirá rastrear y monitorear el progreso del usuario a lo largo del tiempo.
                El seguimiento de procesos se refiere al registro y análisis continuo de las acciones y avances
                realizados por el usuario en su meta personal.</p>
        </section></a>

     <a href="{{ route('foro') }}">
        <section class="card" id="foro">
          <img src="Inclued/social_media.jpg" alt="Foro">
          <h2>Foro</h2>
          <p>Recurso bienestar es una plataforma donde se almacenará y organizará información proveniente de
              diferentes usuarios. Estos recursos incluirán una amplia variedad de datos, estrategias, y experiencias
              compartidas por otros usuarios que también están en la búsqueda de mejorar su bienestar.</p>
      </section></a>
  </main>
</body>
<footer class="footer">
    <div class="footer-container">
      <div class="footer-column">
        <h4>Acerca de Tranquilidad</h4>
        <ul>
            <li><a href="/alimentacion/Inicio/link/quienessomos.html">Acerca de</a></li>
            <li><a href="/alimentacion/Inicio/link/beneficiosdetranquilidad.html">Beneficios de la Tranquilidad</a></li>
            <li><a href="/alimentacion/inicio/link/consejodebienestar.html">Consejos de Bienestar</a></li>
        </ul>
    </div>
      <div class="footer-column">
        <h4>Ayuda y Soporte</h4>
        <ul>
          <li><a href="/alimentacion/inicio/link/contacto.html">Contacto</a></li>
          <li><a href="/alimentacion/inicio/link/sugerencias.html">Sugerencias</a></li>
          <li><a href="/alimentacion/inicio/link/guiadeuso.html">Guía de uso</a></li>
        </ul>
      </div>
      
      <div class="footer-column">
        <h4>Información Legal</h4>
        <ul>
          <li><a href="/alimentacion/inicio/link/terminosycondiciones.html">Términos y condiciones</a></li>
          <li><a href="/alimentacion/inicio/link/politica de privacidad .html">Política de privacidad</a></li>
          <li><a href="/alimentacion/inicio/link/avisolegal.html">Aviso legal</a></li>
        </ul>
      </div>
      
    </div>
    
    <div class="footer-bottom">
      <p>Copyright © 2024 Tranquilidad. Todos los derechos reservados.</p>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
  </footer>

  <script src="{{ asset('js/Inicio.js') }}"></script>
  <script src="{{ asset('js/Header.js') }}"></script>

</html>