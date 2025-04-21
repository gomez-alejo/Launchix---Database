@extends('layout.app')
@section('content')
<!-- Sección Hero -->
<section class="hero-section">
    <!-- Contenedor principal de la sección Hero -->
    <div class="container">
      <!-- Título principal de la sección Hero -->
      <h1 data-aos="fade-up">Bienvenidos a Launchix</h1>
      <!-- Descripción breve de la sección Hero -->
      <p data-aos="fade-up">Tu Plataforma de Oportunidades para Emprendedores en Timbío</p>
      <!-- Botón de llamada a la acción -->
      <a href="login.html" class="cta-button" data-aos="fade-up">Regístrate Ahora</a>
    </div>
  </section>
  
  <!-- Inicio -->
  <!-- Contenido Principal -->
  <main class="container my-5">
    <!-- Sección de Inicio -->
    <section id="inicio" class="mb-5">
      <!-- Título de la sección -->
      <h2 class="section-title" data-aos="fade-right">Explora Launchix</h2>
      <!-- Descripción de la sección -->
      <p data-aos="fade-left">
        En Launchix, te conectamos con un mundo de emprendedores y productos únicos en Timbío. Explora nuestra plataforma para descubrir cómo puedes vender, comprar y promover tus negocios. ¡Únete a nosotros y empieza tu viaje hacia el éxito hoy mismo!
      </p>
    </section>
  
    <!-- Sección de Productos y Servicios -->
    <section class="sectiontres container py-5">
      <!-- Título de la sección con animación de entrada -->
      <h2 class="section-title" data-aos="fade-right">Nuestros Productos y Servicios</h2>
      <div class="row">
        <!-- Primera tarjeta: Tienda en Línea -->
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card h-100">
            <!-- Imagen representativa de la tienda en línea -->
            <img src="https://i.pinimg.com/736x/e1/83/7b/e1837b5c08889d523ce525f24abc7d2a.jpg" alt="Tienda en Línea" class="card-img-top img-fluid">
            <div class="card-body d-flex flex-column">
              <!-- Título de la tarjeta -->
              <h3 class="card-title">Tienda en Línea</h3>
              <!-- Descripción del servicio -->
              <p class="card-text">Crea y personaliza tu tienda en línea para llegar a una audiencia más amplia.</p>
            </div>
          </div>
        </div>
        <!-- Segunda tarjeta: Publicación de Productos -->
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card h-100">
            <!-- Imagen representativa de la publicación de productos -->
            <img src="https://i.pinimg.com/736x/89/7f/b4/897fb4e86c2b4716049dae2720179221.jpg" alt="Publicación de Productos" class="card-img-top img-fluid">
            <div class="card-body d-flex flex-column">
              <!-- Título de la tarjeta -->
              <h3 class="card-title">Publicación de Productos</h3>
              <!-- Descripción del servicio -->
              <p class="card-text">Lista tus productos con descripciones detalladas, fotos y videos.</p>
            </div>
          </div>
        </div>
        <!-- Tercera tarjeta: Carrito de Compras -->
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card h-100">
            <!-- Imagen representativa del carrito de compras -->
            <img src="https://i.pinimg.com/736x/82/6f/d5/826fd53165985939be5b7e29938b3fe3.jpg" alt="Carrito de Compras" class="card-img-top img-fluid">
            <div class="card-body d-flex flex-column">
              <!-- Título de la tarjeta -->
              <h3 class="card-title">Carrito de Compras</h3>
              <!-- Descripción del servicio -->
              <p class="card-text">Facilita las compras con un carrito de compras intuitivo.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  
  
    <!-- Emprendimiento -->
    <section id="emprendimiento" class="mb-5">
      <h2 class="section-title" data-aos="fade-right">Inicia Tu Emprendimiento</h2>
      <p data-aos="fade-left">Brindamos las herramientas y el soporte necesario para ayudar a los emprendedores a hacer crecer su negocio. ¡Tu éxito es nuestra misión!</p>
    </section>
  
    <!-- Testimonios -->
    <section id="testimonios" class="mb-5"> 
      <!-- Título de la sección con animación AOS (fade-right) -->
      <h2 class="section-title" data-aos="fade-right">Testimonios</h2>  
      <!-- Contenedor en forma de fila para organizar los testimonios -->
      <div class="row">  
          <!-- Primera tarjeta de testimonio -->
        <div class="col-md-4 mb-4" data-aos="fade-up"> <!-- Ocupa 4 columnas en pantallas medianas y mayores -->
            <div class="card h-100"> <!-- Tarjeta con altura completa para uniformidad -->
                <div class="card-body"> <!-- Contenido de la tarjeta -->
                    <p>"Launchix ha sido fundamental para el crecimiento de mi negocio. ¡Gracias!"</p>
                    <h5>- Juan Pérez</h5> <!-- Nombre del usuario que da el testimonio -->
                </div>
            </div>
          </div>
        <!-- Repetir -->
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card h-100">
            <div class="card-body">
              <p>"La plataforma es muy fácil de usar y ha aumentado mis ventas significativamente."</p>
              <h5>- María López</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card h-100">
            <div class="card-body">
              <p>"Excelente servicio al cliente y herramientas útiles para emprendedores."</p>
              <h5>- Carlos Gómez</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- Sección del Blog -->
    <section id="blog" class="mb-5">
      <!-- Título de la sección con animación de entrada -->
      <h2 class="section-title" data-aos="fade-right">Blog</h2>
      <div class="row">
        <!-- Primera tarjeta: Cómo empezar tu propio negocio -->
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card h-100">
            <!-- Imagen representativa del artículo -->
            <img src="https://i.pinimg.com/736x/77/d4/30/77d430a161a18188f02a884573683eb2.jpg" alt="Blog Post 1" class="card-img-top img-fluid">
            <div class="card-body">
              <!-- Título del artículo -->
              <h5 class="card-title">Cómo empezar tu propio negocio</h5>
              <!-- Breve descripción del contenido -->
              <p class="card-text">Consejos y estrategias para lanzar tu emprendimiento.</p>
            </div>
          </div>
        </div>
        <!-- Segunda tarjeta: La importancia del marketing digital -->
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card h-100">
            <!-- Imagen representativa del artículo -->
            <img src="https://i.pinimg.com/736x/a3/5c/b5/a35cb5b1d317adcd7a18c8b098883168.jpg" alt="Blog Post 2" class="card-img-top img-fluid">
            <div class="card-body">
              <!-- Título del artículo -->
              <h5 class="card-title">La importancia del marketing digital</h5>
              <!-- Breve descripción del contenido -->
              <p class="card-text">Descubre cómo el marketing digital puede impulsar tu negocio.</p>
            </div>
          </div>
        </div>
        <!-- Tercera tarjeta: Historias de éxito de emprendedores -->
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card h-100">
            <!-- Imagen representativa del artículo -->
            <img src="https://i.pinimg.com/736x/48/82/01/488201e10a9b11a5eaa764efe8e26fae.jpg" alt="Blog Post 3" class="card-img-top img-fluid">
            <div class="card-body">
              <!-- Título del artículo -->
              <h5 class="card-title">Historias de éxito de emprendedores</h5>
              <!-- Breve descripción del contenido -->
              <p class="card-text">Inspírate con las historias de otros emprendedores.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- Sección del Equipo -->
    <section id="equipo" class="mb-5">
      <!-- Título de la sección con animación de entrada -->
      <h2 class="section-title" data-aos="fade-right">Nuestro Equipo</h2>
      <div class="row">
        <!-- Primera tarjeta: Juan Pérez - CEO & Fundador -->
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card text-center h-100">
            <!-- Imagen del miembro del equipo con diseño circular -->
            <img src="https://i.pinimg.com/736x/49/54/ae/4954ae32ae693128a1e85ede8ab8288d.jpg" alt="Team Member 1" class="card-img-top img-fluid rounded-circle mx-auto mt-3">
            <div class="card-body">
              <!-- Nombre del miembro del equipo -->
              <h5 class="card-title">Alejandro Gómez</h5>
              <!-- Cargo dentro de la empresa -->
              <p class="card-text">CEO & Fundador</p>
            </div>
          </div>
        </div>
        <!-- Repetir el procedimiento para los demás miembros del equipo -->
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card text-center h-100">
            <img src="https://i.pinimg.com/736x/4e/55/b8/4e55b89add9b83b4dc1ea16af44ae744.jpg" alt="Team Member 2" class="card-img-top img-fluid rounded-circle mx-auto mt-3">
            <div class="card-body">
              <h5 class="card-title">stefany viveros</h5>
              <p class="card-text">Directora de Marketing</p>
            </div>
          </div>
        </div>
        <!-- Repetir -->
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card text-center h-100">
            <img src="https://i.pinimg.com/736x/30/74/fd/3074fd1510f56394ca662e4169da23d0.jpg" alt="Team Member 3" class="card-img-top img-fluid rounded-circle mx-auto mt-3" class="img">
            <div class="card-body">
              <h5 class="card-title">manzano manzano</h5>
              <p class="card-text">Desarrollador Principal</p>
            </div>
          </div>
        </div>
        <!-- Repetir -->
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card text-center h-100">
            <img src="https://i.pinimg.com/736x/2e/26/50/2e2650de2b1e66917a3ca3ca502279e0.jpg" alt="Team Member 4" class="card-img-top img-fluid rounded-circle mx-auto mt-3">
            <div class="card-body">
              <h5 class="card-title">julian dominguez</h5>
              <p class="card-text">Diseñador UX/UI</p>
            </div>
          </div>
        </div>
        <!-- Repetir -->
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card text-center h-100">
            <img src="https://i.pinimg.com/736x/fe/eb/5c/feeb5c1958bc21536ae2c4d02964483f.jpg" alt="Team Member 5" class="card-img-top img-fluid rounded-circle mx-auto mt-3">
            <div class="card-body">
              <h5 class="card-title">Luis enrique</h5>
              <p class="card-text">Especialista en SEO</p>
            </div>
          </div>
        </div>
        <!-- Repetir -->
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card text-center h-100">
            <img src="https://i.pinimg.com/736x/9d/4d/ce/9d4dcea8adb25678a27702ac93eb6e91.jpg" alt="Team Member 6" class="card-img-top img-fluid rounded-circle mx-auto mt-3">
            <div class="card-body">
              <h5 class="card-title">guillermo gomez </h5>
              <p class="card-text">Gerente de Producto</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  
  
    <!-- Sección de Preguntas Frecuentes (FAQ) -->
    <section id="faq" class="mb-5">
      <!-- Título de la sección con animación -->
      <h2 class="section-title" data-aos="fade-right" >Preguntas Frecuentes</h2>
      <div class="accordion" id="faqAccordion">
        <!-- Primera pregunta: Registro en Launchix -->
        <div class="accordion-item" data-aos="fade-up">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              ¿Cómo puedo registrarme en Launchix?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Registrarse en Launchix es fácil. Simplemente haz clic en "Iniciar Sesión / Registro" y sigue las instrucciones.
            </div>
          </div>
        </div>
        <!-- Repetir el procedimiento para las siguientes preguntas -->
        <div class="accordion-item" data-aos="fade-up">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              ¿Qué métodos de pago aceptan?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Aceptamos tarjetas de crédito, débito, transferencias y más.
            </div>
          </div>
        </div>
        <!-- Repetir -->
        <div class="accordion-item" data-aos="fade-up">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              ¿Cómo puedo contactar al soporte técnico?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Puedes contactarnos a través de soporte@launchix.com o llamando al +57 320 123 4567.
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- Aside -->
    <aside data-aos="fade-left">
      <h3>Noticias Recientes</h3>
      <p>Mantente actualizado con las últimas noticias y tendencias en el mundo del emprendimiento.</p>
      <ul>
        <li><a href="#">Nueva actualización de la plataforma</a></li>
        <li><a href="#">Evento de networking para emprendedores</a></li>
        <li><a href="#">Consejos para mejorar tu estrategia de marketing</a></li>
      </ul>
    </aside>
  
  </main>
@endsection
<!-- Footer Bootstrap -->