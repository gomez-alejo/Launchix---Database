<!-- Barra de Navegación -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="{{route('inicio')}}">
        <i class="fas fa-store"></i> Launchix
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link" href="{{route('inicio')}}"><i class="fas fa-home"></i> Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('productos')}}"><i class="fas fa-box"></i> Productos</a></li>
          <li class="nav-item"><a class="nav-link" href="servicios.html"><i class="fas fa-concierge-bell"></i> Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="emprendimieto.html"><i class="fas fa-lightbulb"></i> Emprendimiento</a></li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="{{route('users.create')}}"><i class="fas fa-user"></i> Iniciar Sesión / Registro</a></li>
          <li class="nav-item cart-icon" onclick="toggleCartDropdown()">
            <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
            <span id="cart-count" class="cart-count">0</span>
            <div id="cart-dropdown" class="cart-dropdown">
              <h5 class="p-2">Carrito de Compras</h5>
              <ul id="cart" class="list-group p-2">
                <!-- Productos en el carrito -->
              </ul>
              <div class="p-2">
                <strong>Total: $<span id="cart-total">0.00</span></strong>
              </div>
            <a href="imagenes/compra.jpg"> <button id="checkout" class="btn btn-primary mt-3 mx-2">Finalizar Compra</button></a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>