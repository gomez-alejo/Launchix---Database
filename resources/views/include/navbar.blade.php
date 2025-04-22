<!-- Barra de Navegación -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <!-- Contenedor principal de la barra de navegación -->
    <div class="container">
      <!-- Logo de la página -->
      <a class="navbar-brand" href="#inicio">
        <i class="fas fa-store"></i> Launchix <!-- Icono y nombre del sitio -->
      </a>
  
      <!-- Botón para dispositivos móviles -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> <!-- Icono del botón para dispositivos móviles -->
      </button>
  
      <!-- Contenedor de enlaces de navegación -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <!-- Lista de enlaces de navegación -->
        <ul class="navbar-nav me-auto">
          <!-- Enlace a la página de inicio -->
          <li class="nav-item"><a class="nav-link" href="{{route('inicio')}}"><i class="fas fa-home"></i> Inicio</a></li>
          <!-- Enlace a la página de productos -->
          <li class="nav-item"><a class="nav-link" href="{{route('productos')}}"><i class="fas fa-box"></i> Productos</a></li>
          <!-- Enlace a la página de servicios -->
          <li class="nav-item"><a class="nav-link" href="servicios.html"><i class="fas fa-concierge-bell"></i> Servicios</a></li>
          <!-- Enlace a la página de emprendimiento -->
          <li class="nav-item"><a class="nav-link" href="emprendimieto.html"><i class="fas fa-lightbulb"></i> Emprendimiento</a></li>
          <!-- Enlace a la página del blog -->
          <li class="nav-item"><a class="nav-link" href="blog.html"><i class="fas fa-blog"></i> Blog</a></li>
          <!-- Enlace a la página de preguntas frecuentes -->
          <li class="nav-item"><a class="nav-link" href="#faq"><i class="fas fa-question-circle"></i> FAQ</a></li>
        </ul>
  
        <!-- Lista de enlaces de navegación alineados a la derecha -->
        <ul class="navbar-nav">
          <!-- Enlace a la página de inicio de sesión/registro -->
          <li class="nav-item"><a class="nav-link" href="{{ route('users.create') }}"><i class="fas fa-user"></i> Iniciar Sesión / Registro</a></li>
        </ul>
      </div>
    </div>
  </nav>