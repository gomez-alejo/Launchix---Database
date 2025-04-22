@extends('layout.product')
@section('content')
  
  <!-- Barra de Búsqueda -->
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-6">
        <input type="text" id="search" class="form-control" placeholder="Buscar productos..." onkeyup="filterProducts()">
      </div>
      <div class="col-md-6">
        <select id="filter" class="form-control" onchange="filterProducts()">
          <option value="all">Todos</option>
          <option value="electronics">Electrónica</option>
          <option value="clothing">Ropa</option>
          <option value="home">Hogar</option>
          <option value="toy">juguetes</option>
          <option value="home">accesorios</option>
          <option value="home">deportivos</option>
        </select>
      </div>
    </div>
  </div>
  
  <!-- Lista de Productos -->
  <div class="container mt-4">
    <div class="row" id="product-list">
      <!-- Tarjeta de Producto 1 -->
      <div class="col-md-4 mb-4 product-item" data-category="electronics">
        <div class="card">
          <img src= "imagenes/electronico 1.PNG" class="card-img-top" alt="Producto 1">
          <div class="card-body">
            <h5 class="card-title">Control Xbox Universal-Compatible con PS5</h5>
            <p class="card-text">Precio: $20.00</p>
            <div class="rating">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
            </div>
            <button class="btn btn-primary mt-2" onclick="addToCart('Producto 1', 20.00, 'https://via.placeholder.com/150')">Agregar al Carrito</button>
          </div>
        </div>
      </div>
      <!-- Repite para más productos -->
      <!-- Tarjeta de Producto 2 -->
      <div class="col-md-4 mb-4 product-item" data-category="clothing">
        <div class="card">
          <img src="imagenes/Ropa 1.PNG" class="card-img-top" alt="Producto 2">
          <div class="card-body">
            <h5 class="card-title">10pcs Camisetas de Manga Corta para Hombre de Calidad Premium</h5>
            <p class="card-text">Precio: $30.00</p>
            <div class="rating">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
            </div>
            <button class="btn btn-primary mt-2" onclick="addToCart('Producto 2', 30.00, 'https://via.placeholder.com/150')">Agregar al Carrito</button>
          </div>
        </div>
      </div>
      <!-- Repite para más productos -->
      <!-- Tarjeta de Producto 3 -->
      <div class="col-md-4 mb-4 product-item" data-category="home">
        <div class="card">
          <img src="imagenes/Hogar 1.PNG" class="card-img-top" alt="Producto 3">
          <div class="card-body">
            <h5 class="card-title">Sartén antiadherente, con cuatro compartimentos</h5>
            <p class="card-text">Precio: $40.00</p>
            <div class="rating">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
            </div>
            <button class="btn btn-primary mt-2" onclick="addToCart('Producto 3', 40.00, 'https://via.placeholder.com/150')">Agregar al Carrito</button>
          </div>
        </div>
      </div>
      <!-- Repite para más productos -->
      <!-- Tarjeta de Producto 4 -->
      <div class="col-md-4 mb-4 product-item" data-category="electronics">
        <div class="card">
          <img src="imagenes/electronico 2.PNG" class="card-img-top" alt="Producto 4">
          <div class="card-body">
            <h5 class="card-title">Una estación de acoplamiento tipo C 8 en 1, con un hub USB C .</h5>
            <p class="card-text">Precio: $50.00</p>
            <div class="rating">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
            </div>
            <button class="btn btn-primary mt-2" onclick="addToCart('Producto 4', 50.00, 'https://via.placeholder.com/150')">Agregar al Carrito</button>
          </div>
        </div>
      </div>
      <!-- Repite para más productos -->
      <!-- Tarjeta de Producto 5 -->
      <div class="col-md-4 mb-4 product-item" data-category="clothing">
        <div class="card">
          <img src="imagenes/Ropa 2.PNG" class="card-img-top" alt="Producto 5">
          <div class="card-body">
            <h5 class="card-title">1pc Camiseta de manga corta para hombre de punto casual - 95% Poliéster</h5>
            <p class="card-text">Precio: $60.00</p>
            <div class="rating">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
            </div>
            <button class="btn btn-primary mt-2" onclick="addToCart('Producto 5', 60.00, 'https://via.placeholder.com/150')">Agregar al Carrito</button>
          </div>
        </div>
      </div>
      <!-- Repite para más productos -->
      <!-- Tarjeta de Producto 6 -->
      <div class="col-md-4 mb-4 product-item" data-category="home">
        <div class="card">
          <img src="imagenes/Hogar 2.PNG
          " class="card-img-top" alt="Producto 6">
          <div class="card-body">
            <h5 class="card-title">Tablero de Cortar de Acero Inoxidable 316 y Tabla de Cortar para Cocina</h5>
            <p class="card-text">Precio: $70.00</p>
            <div class="rating">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
            </div>
            <button class="btn btn-primary mt-2" onclick="addToCart('Producto 6', 70.00, 'https://via.placeholder.com/150')">Agregar al Carrito</button>
          </div>
        </div>
      </div>
      <!-- Repite para más productos -->
      <!-- Tarjeta de Producto 7 -->
      <div class="col-md-4 mb-4 product-item" data-category="electronics">
        <div class="card">
          <img src="imagenes/electronico 3.PNG" class="card-img-top" alt="Producto 7">
          <div class="card-body">
            <h5 class="card-title">1/2 Luz de Ambiente de Escritorio Colorida.....</h5>
            <p class="card-text">Precio: $80.00</p>
            <div class="rating">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
            </div>
            <button class="btn btn-primary mt-2" onclick="addToCart('Producto 7', 80.00, 'https://via.placeholder.com/150')">Agregar al Carrito</button>
          </div>
        </div>
      </div>
      <!-- Repite para más productos -->
      <!-- Tarjeta de Producto 8 -->
      <div class="col-md-4 mb-4 product-item" data-category="clothing">
        <div class="card">
          <img src="imagenes/Ropa 3.PNG" class="card-img-top" alt="Producto 8">
          <div class="card-body">
            <h5 class="card-title">100% gorra de béisbol de punto de algodón con bordado de letra C</h5>
            <p class="card-text">Precio: $90.00</p>
            <div class="rating">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
            </div>
            <button class="btn btn-primary mt-2" onclick="addToCart('Producto 8', 90.00, 'https://via.placeholder.com/150')">Agregar al Carrito</button>
          </div>
        </div>
      </div>
      <!-- Repite para más productos -->
      <!-- Tarjeta de Producto 9 -->
      <div class="col-md-4 mb-4 product-item" data-category="home">
        <div class="card">
          <img src="imagenes/Hogar 3.PNG" class="card-img-top" alt="Producto 9">
          <div class="card-body">
            <h5 class="card-title">1pc SwiftSharp USB Recargable Afilador Automático de Cuchillos</h5>
            <p class="card-text">Precio: $100.00</p>
            <div class="rating">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
            </div>
            <button class="btn btn-primary mt-2" onclick="addToCart('Producto 9', 100.00, 'https://via.placeholder.com/150')">Agregar al Carrito</button>
          </div>
        </div>
      </div>
      <!-- Repite para más productos -->
      <!-- Tarjeta de Producto 10 -->
      <div class="col-md-4 mb-4 product-item" data-category="electronics">
        <div class="card">
          <img src="imagenes/electronico 4.PNG" class="card-img-top" alt="Producto 10">
          <div class="card-body">
            <h5 class="card-title">Recortadora de vello púbico y corporal para hombres</h5>
            <p class="card-text">Precio: $110.00</p>
            <div class="rating">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
            </div>
            <button class="btn btn-primary mt-2" onclick="addToCart('Producto 10', 110.00, 'https://via.placeholder.com/150')">Agregar al Carrito</button>
          </div>
        </div>
      </div>
      <!-- Repite para más productos -->
      <!-- Tarjeta de Producto 11 -->
      <div class="col-md-4 mb-4 product-item" data-category="clothing">
        <div class="card">
          <img src="imagenes/Ropa 4.PNG" class="card-img-top" alt="Producto 11">
          <div class="card-body">
            <h5 class="card-title">3/6pcs Calcetines Atléticos para Hombres - "TYPE"</h5>
            <p class="card-text">Precio: $120.00</p>
            <div class="rating">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
            </div>
            <button class="btn btn-primary mt-2" onclick="addToCart('Producto 11', 120.00, 'https://via.placeholder.com/150')">Agregar al Carrito</button>
          </div>
        </div>
      </div>
      <!-- Repite para más productos -->
      <!-- Tarjeta de Producto 12 -->
      <div class="col-md-4 mb-4 product-item" data-category="home">
        <div class="card">
          <img src="imagenes/Hogar 4.PNG" class="card-img-top" alt="Producto 12">
          <div class="card-body">
            <h5 class="card-title">Conjunto de 12 recipientes herméticos - Plástico sin BPA</h5>
            <p class="card-text">Precio: $130.00</p>
            <div class="rating">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star-half-alt text-warning"></i>
            </div>
            <button class="btn btn-primary mt-2" onclick="addToCart('Producto 12', 130.00, 'https://via.placeholder.com/150')">Agregar al Carrito</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection