@guest
<nav
class="navbar navbar-expand-lg navbar-light navbar-store fixed-top nabvar-fixed-top"
data-aos="fade-down"
>
<div class="container">
  <a href="{{ Route('home')}}" class="navbar-brand">
    <img src="/images/logo.svg" alt="Logo" />
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
      <li class="nav-item">
        <a href="{{ Route('home')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
        <a href="{{ Route('categories')}}" class="nav-link">Categories</a>
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
          class="btn btn-success px-8 text-white nav-link"
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
      <a href="/index.html" class="navbar-brand">
          <img src="/images/logo.svg" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
     </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                  <a href="/index.html" class="nav-link">Home</a>
              </li>
              <li class="nav-item ">
                  <a href="/categories.html" class="nav-link">Categories</a>
              </li>
              <li class="nav-item ">
                  <a href="#" class="nav-link">Rewards</a>
              </li>


          </ul>
          <!-- Desktop Menu -->
          <ul class="navbar-nav d-none d-lg-flex">
              <li class="nav-item dropdown">
                  <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                      <img src="/images/user_pc.png" class="rounded-circle mr-2 profile-picture" alt=""> Hi, Galih Zen
                  </a>
                  <div class="dropdown-menu">
                      <a href="/dashboard.html" class="dropdown-item">Dashboard</a>
                      <a href="/dashboard-account.html" class="dropdown-item">Profil</a>
                      <div class="dropdown-divider"></div>
                      <a href="/" class="dropdown-item">Logout</a>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link d-inline-block mt-2">
                      <img src="/images/ic_keranjang_isi.svg" alt="">
                      <div class="card-badge">3</div>
                  </a>
              </li>
          </ul>

          <!-- Mobile Menu -->
          <ul class="navbar-nav d-block d-lg-none">
              <li class="nav-item">
                  <a href="#" class="nav-link">Hi, Galih Zen</a>
              </li>
              <li class="nav-item active">
                  <a href="#" class="nav-link d-inline-block">Cart</a>
              </li>
          </ul>
      </div>
  </div>
</nav>
@endauth