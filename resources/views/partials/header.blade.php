<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('product.shoppingCart') }}">
         Shopping Cart <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
        </a>
      </li>
      <li style="cursor: pointer; cursor: hand;">
                <!-- Example single danger button -->
            <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i> User Management
            </button>
            <div class="dropdown-menu">
            
                @if(Auth::check())
                  <a class="dropdown-item" href="{{ route('user.profile') }}">User Profile</a>
                  <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
                @else
                  <a class="dropdown-item" href="{{ route('user.signup') }}">SignUp</a>
                  <a class="dropdown-item" href="{{ route('user.signin') }}">SignIn</a>
                @endif

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
            </div>
            </li>
    </ul>
  </div>
</nav>