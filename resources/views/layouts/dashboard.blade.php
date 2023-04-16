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
            <img src="/images/dashboard_logo.svg" class="my-4" />
          </div>
          <div class="list-group list-group-flush">
            <a
              class="list-group-item list-group-item-action"
              href="{{ Route ('dashboard')}}"
            >
              Dashboard
            </a>
            <a
              class="list-group-item list-group-item-action"
              href="{{ Route ('dashboard-products')}}"
            >
              My Products
            </a>
            <a
              class="list-group-item list-group-item-action"
              href="{{ Route ('dashboard-transactions')}}"
            >
              Transactions
            </a>
            <a
              class="list-group-item list-group-item-action"
              href="{{ Route ('dashboard-setting-store')}}"
            >
              Store Setting
            </a>
            <a
              class="list-group-item list-group-item-action"
              href="{{ Route ('dashboard-setting-account')}}"
            >
              My Account
            </a>
            <a
              class="list-group-item list-group-item-action"
              href="{{ Route ('home')}}"
            >
              Sign Out
            </a>
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
                      Hi, Galih Zen
                    </a>
                    <div class="dropdown-menu">
                      <a href="{{ Route ('dashboard')}}" class="dropdown-item"
                        >Dashboard</a
                      >
                      <a href="/dashboard-account.html" class="dropdown-item"
                        >Profil</a
                      >
                      <div class="dropdown-divider"></div>
                      <a href="{{ Route ('logout')}}" class="dropdown-item">Logout</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="{{ Route('cart')}}" class="nav-link d-inline-block mt-2">
                      <img src="/images/ic_keranjang_isi.svg" alt="" />
                      <div class="card-badge">3</div>
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
                      >Hi, Galih Zen <b>></b></a
                    >
                    <div class="dropdown-menu">
                      <a href="/dashboard.html" class="dropdown-item"
                        >Dashboard</a
                      >
                      <a href="{{ Route ('cart')}}" class="dropdown-item"
                        >Profil</a
                      >
                      <div class="dropdown-divider"></div>
                      <a href="{{ Route('logout')}}" class="dropdown-item">Logout</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="{{ Route('cart')}}" class="nav-link d-inline-block"
                      >Cart</a
                    >
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