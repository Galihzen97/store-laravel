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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
    @stack('addon-style')

  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Side Bar -->
        <div class="border-right sidebar-images" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/admin.png" class="my-4 " style="max-width: 150px"  />
          </div>
          <div class="list-group list-group-flush">
            <a
              class="list-group-item list-group-item-action {{ request()->is('admin') ? 'active' : ''}}"
              href="{{ Route('admin-dashboard')}}"
            >
              Dashboard
            </a>
            <a
              class="list-group-item list-group-item-action"
              href"#"
            >
              Products
            </a>
            <a
              class="list-group-item list-group-item-action {{ request()->is('admin/category*') ? 'active' : ''}}"
              href="{{ Route('category.index')}}"
            >
              Category
            </a>
            <a
              class="list-group-item list-group-item-action"
              href="{{ Route ('dashboard-setting-store')}}"
            >
              Transactions
            </a>
            <a
              class="list-group-item list-group-item-action"
              href="#"
            >
              Users
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
                      <div class="dropdown-divider"></div>
                      <a href="{{ Route ('logout')}}" class="dropdown-item">Logout</a>
                    </div>
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
                      <a href="{{ Route('logout')}}" class="dropdown-item">Logout</a>
                    </div>
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
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.js"></script>
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
    <script>
      $(document).ready(function() {
          toastr.options.timeOut = 10000;
          @if (Session::has('error'))
              toastr.error('{{ Session::get('error') }}');
          @elseif(Session::has('success'))
              toastr.success('{{ Session::get('success') }}');
          @endif
      });

  </script>
    @stack('addon-script')
  </body>
</html>
