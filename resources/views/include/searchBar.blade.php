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