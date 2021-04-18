<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-fluid">
      <span class="bagde">{{Session::has('cart')? Session::get('cart')->totalQty : ''}}</span>
    </div>
      <div class="container-fluid">
      <a class="navbar-brand" href="#">Brand</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Clothes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Shoes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Accessories</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>