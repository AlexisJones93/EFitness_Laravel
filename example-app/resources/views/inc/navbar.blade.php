<nav class="navbar navbar-expand-md navbar-dark">
      <div class="container-fluid">
      <a class="navbar-brand" href="#">Brand</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="{{route('pages.clothes')}}">Clothes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Shoes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Accessories</a>
          </li>
        </ul>
      </div>
      <div class="nav navbar-nav navbar-right">
        <a href="" class="nav-link"><i class="far fa-heart"></i></a>
        <a href="{{route('users.signup')}}" class="nav-link"><i class="fas fa-user"></i></a>
        <a href="{{route('product.shoppingCart')}}" class="nav-link"><i class="fa fa-shopping-basket"></i></a>
        <a href="" class="nav-link"><span class="bagde">{{Session::has('cart')? Session::get('cart')->totalQty : ''}}</span></a>
      </div>
    </div>
  </nav>