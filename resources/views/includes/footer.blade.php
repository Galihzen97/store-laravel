<footer class="mt-5 mb-4 border-top">
    <div class="container">
      <div
        class="row justify-content-center"
        data-aos="fade-up"
        data-aos-delay="100"
      >
        <div class="col-12">
          <div class="row">
            <div class="col-6 col-md-4 col-lg-3">
              <h5>FEATURES</h5>
              <ul class="list-unstyled">
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Sosial Media Kit</a></li>
                <li><a href="#">Affiliate</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <h5>ACCOUNT</h5>
              <ul class="list-unstyled">
                <li><a href="#">Refund</a></li>
                <li><a href="#">Security</a></li>
                <li><a href="#">Reward</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <h5>COMPANY</h5>
              <ul class="list-unstyled">
                <li><a href="#">Career</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Media</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <h5>GET CONNECTED</h5>
              <ul class="list-unstyled">
                <li><a href="#">Jambi</a></li>
                <li><a href="#">Indonesia</a></li>
                <li><a href="#">+62 822-8239-1065</a></li>
                <li><a href="#">Galihwik@gmailcom</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-4">
        <div class="col-12 text-center">
          <p class="pt-4 pb-2">
            2023 Copyright <span> <a href="{{ route('home')}}">CafaMoon</a> </span> - All
            right reserved.
          </p>
        </div>
      </div>
    </div>
  </footer>

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