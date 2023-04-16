@extends('layouts.admin')
@section('title')
    Administrator | Add Category
@endsection
@section('content')

  <!-- Section Content -->
  <div class="section-content section-dashboard-home" data-aos="fade-up" >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title"> Admin Category</h2>
        <p class="dashboard-subtitle">Create New Ctegory</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors-all() as $error)
                            <li>{{ $error}}</li>
                            
                        @endforeach
                    </ul>
                </div>
                
                
            @endif
            <div class="card">
              <div class="card-body">
                <form action="{{ Route('category.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label > Nama Category</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="photo"> Foto </label>
                                <img class="img-preview img-fluid d-block col-sm-3 mb-3" alt="">
                                <input id="photo" type="file" name="photo" class="form-control" onchange="previewImage()" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-right">
                            <button type="submit" class="btn btn-success px-5">Save Now</button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

@endsection

@push('addon-script')
<script>
  function previewImage() {
    
  const image = document.querySelector('#photo');
  const imgPreview = document.querySelector('.img-preview');

  imgPreview.style.display = 'block';

  const oFReader = new FileReader();
  oFReader.readAsDataURL(event.target.files[0]);

  oFReader.onload = function(oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}
</script>
@endpush