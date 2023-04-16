@extends('layouts.admin')
@section('title')
    Administrator | Edit Category
@endsection
@section('content')

  <!-- Section Content -->
  <div class="section-content section-dashboard-home" data-aos="fade-up" >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title"> Admin Category</h2>
        <p class="dashboard-subtitle">Edit Category <span class="text-success"> {{ $item->name }}</span></p>
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
                <form action="{{ Route('category.update',$item->id)}}" method="POST" enctype="multipart/form-data">
                  @method('PUT')  
                  @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Nama Category</label>
                                <input type="text" name="name" value="{{ $item->name }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Foto </label>
                                <input type="hidden" name="OldPhoto" value="{{ $item->photo }}">
                                @if ( $item->photo)
                                <img src="{{ asset('storage/'. $item->photo)}}" class="img-preview img-fluid mb-3 d-block col-sm-3" alt="">  
                                @else
                                <img class="img-preview img-fluid d-block col-sm-3 mb-3" alt="">
                                @endif
                               
                                <input type="file" name="photo" class="form-control"  onchange="previewImage()">
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
