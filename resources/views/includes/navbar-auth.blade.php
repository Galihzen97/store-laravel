<nav
class="navbar navbar-expand-lg navbar-light navbar-store fixed-top nabvar-fixed-top"
data-aos="fade-down"
>
<div class="container">
 
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
      <li class="nav-item {{ request()->is('home') ? 'active' : ''}}" >
        <a href="{{ Route ('home')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
        <a href="{{ Route('categories')}}" class="nav-link">Categories</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Rewards</a>
      </li>
    </ul>
  </div>
</div>
</nav>
