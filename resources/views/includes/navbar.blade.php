@guest
<nav
class="navbar navbar-expand-lg navbar-light navbar-store fixed-top nabvar-fixed-top"
data-aos="fade-down"
>
<div class="container">
  <a href="{{ Route('home')}}" class="navbar-brand">
    <h1 class="modal-title" id="exampleModalLabel"
        style=" background: linear-gradient(90deg, #ff8c00, #4a90e2);
        -webkit-background-clip: text;
        color: transparent;
        display: inline-block;">Cafamoon</h1>
  </a>
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarNav"
  >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a href="{{ Route('home')}}" class="nav-link {{ request()->is('/') ? 'active' : ''}} ">Home</a>
      </li>
      <li class="nav-item">
        <a href="{{ Route('categories')}}" class="nav-link {{ request()->is('categories*') ? 'active' : ''}}">Categories</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Rewards</a>
      </li>
      <li class="nav-item">
        <a href="{{ Route('register')}}" class="nav-link">Sign up</a>
      </li>
      <li class="nav-item">
        <a
          href="{{ Route('login')}}"
          class="btn btn-login px-8 nav-link"
          
          >Sign in</a
        >
      </li>
    </ul>
  </div>
</div>
</nav>
@endguest

@auth
<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top nabvar-fixed-top" data-aos="fade-down">
  <div class="container">
      <a href="/" class="navbar-brand">
        <h1 class="modal-title" id="exampleModalLabel"
        style=" background: linear-gradient(90deg, #ff8c00, #4a90e2);
        -webkit-background-clip: text;
        color: transparent;
        display: inline-block;">Cafamoon</h1>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a href="{{ Route('home')}}" class="nav-link {{ request()->is('/') ? 'active' : ''}} ">Home</a>
            </li>
            <li class="nav-item">
              <a href="{{ Route('categories')}}" class="nav-link {{ request()->is('categories*') ? 'active' : ''}}">Categories</a>
            </li>
            <li class="nav-item d-none d-lg-flex">
              <buttonclass="nav-link" onclick="toggleForm()">
                <img src="/images/search.png" style="width: 25px; padding-top:10px;" class="rounded-circle mr-2 profile-picture button-search" alt="">
              </button>
            </li>
            <form class="form-inline my-2 my-lg-0" id="searchForm" style="display: none;" action="{{ Route('checkout')}}"method="POST" enctype="">
              @csrf
              <input class="form-control mr-sm-2" id="searchInput" type="search" placeholder="Search" aria-label="Search">
              <buttonclass="nav-link" onclick="toggleForm()">
                <img src="/images/close.png" style="width: 30px" class="rounded-circle mr-2 profile-picture button-search" alt="">
              </button>
            </form>
      
        
          </ul>
          <!-- Desktop Menu -->
          <ul class="navbar-nav d-none d-lg-flex">
              <li class="nav-item dropdown">
                  <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                      <img src="/images/user_pc.png" class="rounded-circle mr-2 profile-picture" alt=""> Halo, {{ Auth::user()->name}}
                  </a>
                  <div class="dropdown-menu">
                      <a href="{{ Route('dashboard')}}" class="dropdown-item">Dashboard</a>
                      <a href="{{ Route('dashboard-setting-account')}}" class="dropdown-item">Profile</a>
                      <div class="dropdown-divider"></div>
                      <button type="button" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                        Logout
                      </button>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="{{ Route('cart')}}"  class="nav-link d-inline-block mt-2">
                    @php
                    $carts = \App\Models\Cart::where('users_id', Auth::user()->id)->count();
                    @endphp
                    @if ( $carts > 0 )
                    <img src="/images/ic_keranjang_isi.svg" alt="">
                    <div class="card-badge">{{ $carts}}</div>
                    @else
                    <img src="/images/ic_keranjang.svg" alt="">
                    @endif
                      
                  </a>
              </li>
          </ul>

          <!-- Mobile Menu -->
          <ul class="navbar-nav d-block d-lg-none">
              <li class="nav-item dropdown">
                  <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">Halo, {{ Auth::user()->name}} ></a>
                  <div class="dropdown-menu">
                    <a href="{{ Route('dashboard')}}" class="dropdown-item">Dashboard</a>
                    <a href="{{ Route('dashboard-setting-account')}}" class="dropdown-item">Profile</a>
                    <div class="dropdown-divider"></div>
                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                      Logout
                    </button>
                </div>
                </li>
              <li class="nav-item">
                @php
                $carts = \App\Models\Cart::where('users_id', Auth::user()->id)->count();
                @endphp
                  <a href="{{ Route('cart')}}" class="nav-link d-inline-block {{ request()->is('cart*') ? 'active' : ''}}">Cart, <span class="text-danger">{{ $carts}}</span></a>
              </li>
              <li class="nav-item">
                <form class="form-inline my-2 my-lg-0" id="searchForm" >
                  @csrf
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
              </li>
          </ul>
      </div>
  </div>
</nav>
@endauth