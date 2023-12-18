<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title> @yield('title')</title>

    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    @stack('addon-style')

  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Side Bar -->
        <div class="border-right sidebar-images" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
          <a href="{{route('home')}}">
            <img src="/images/dashboard_logo.svg" class="my-4" />
          </a>
          </div>
          <div class="list-group list-group-flush">
            <a
              class="list-group-item list-group-item-action {{ request()->is('dashboard') ? 'active' : ''}}"
              href="{{ Route ('dashboard')}}"
            >
              Dashboard
            </a>
            <a
              class="list-group-item list-group-item-action {{ request()->is('dashboard/products*') ? 'active' : ''}}"
              href="{{ Route ('dashboard-products')}}"
            >
              My Products
            </a>
            <a
              class="list-group-item list-group-item-action {{ request()->is('dashboard/transactions*') ? 'active' : ''}}"
              href="{{ Route ('dashboard-transactions')}}"
            >
              Transactions
            </a>
            <a
              class="list-group-item list-group-item-action {{ request()->is('dashboard/setting*') ? 'active' : ''}}"
              href="{{ Route ('dashboard-setting-store')}}"
            >
              Store Setting
            </a>
            <a
              class="list-group-item list-group-item-action {{ request()->is('dashboard/account') ? 'active' : ''}}"
              href="{{ Route ('dashboard-setting-account')}}"
            >
              My Account
            </a>
            <button type="button"  class="list-group-item list-group-item-action {{ request()->is('dashboard/account') ? 'active' : ''}}" data-toggle="modal" data-target="#logoutModal">
              Logout
            </button>
          </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
            <div class="container-fluid">
              <button
                class="btn btn-secondary d-md-none mr-auto mr-2"
                id="menu-toggle"
              >
                &laquo; Menu
              </button>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Desktop Menu -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                  <li class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                    >
                      <img
                        src="/images/user_pc.png"
                        class="rounded-circle mr-2 profile-picture"
                        alt=""
                      />
                      Halo, {{ Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu">
                      <a href="{{ Route ('dashboard')}}" class="dropdown-item"
                        >Dashboard</a
                      >
                      <a href="/dashboard/account" class="dropdown-item"
                        >Profil</a
                      >
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
                  <li class="nav-item">
                    <a
                      href="#"
                      class="nav-link"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                      >Halo, {{ Auth::user()->name}} , ▶️</a
                    >
                    <div class="dropdown-menu">
                      <a href="/dashboard" class="dropdown-item"
                        >Dashboard</a
                      >
                      <a href="{{ Route ('cart')}}" class="dropdown-item"
                        >Profil</a
                      >
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
                </ul>
              </div>
            </div>
          </nav>
        {{--  Content  --}}

        @yield('content')

        </div>
      </div>
    </div>

      {{--  Modal  --}}
@auth
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 20px">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"
        style=" background: linear-gradient(90deg, red, blue);
        -webkit-background-clip: text;
        color: transparent;
        display: inline-block;">Cafamoon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Hai <b>{{ Auth::user()->name}}</b>, Apakah anda yakin untuk logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary " data-dismiss="modal"
        style="
        border-radius: 20px;">Close</button>
        <a href="{{ route('logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
          class="btn btn-success" style="border-radius: 20px;">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
          </form> 
        
      </div>
    </div>
  </div>
</div>
@endauth

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      AOS.init();
    </script>

    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    @stack('addon-script')
  </body>
</html>
