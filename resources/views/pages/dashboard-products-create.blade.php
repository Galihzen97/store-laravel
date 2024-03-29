@extends('layouts.dashboard')
@section('title')
    Cafamoon | Create Products
@endsection
@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Add New Product</h2>
      <p class="dashboard-subtitle">Create your own product</p>
    </div>
    
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
          @endif

          <form action="{{ route('dashboard-products-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">

            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <label for="name" class="mb-2">Product Name</label>
                      <input type="text" class="form-control"  aria-describedby="name" name="name" placeholder="Masukan Nama Produk"/>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group ">
                      <label for="price" class="mb-2" >Price</label>
                      <input type="number" class="form-control" aria-describedby="price" name="price" placeholder="Masukan Harga"/>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <label for="category" class="mb-2">Category</label>
                      <select name="categories_id"  class="form-control">
                        <option value="">--Pilih Category--</option>
                        @foreach ($categories as $category)
                          <option value="{{ $category->id }}">
                              {{$category->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea name="description" id="editor" cols="30" rows="4" class="form-control">
                          {{-- The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet for unimaginable, all-day comfort. There's super breathable fabrics on the upper, while colours add a modern edge. Bring the past into the future with the Nike Air Max 2090, a bold look inspired by the DNA of the iconic Air Max 90. Brand-new Nike Air cushioning --}}
                      </textarea>
                    </div>
                  </div>

                  <div class="col-md-12 mt-3">
                    <div class="form-group">
                      <label for="thumbnails" class="form-label">Thumbnails</label>
                      <input class="form-control" type="file" multiple class="form-control pt-1" id="thumbnails" name="photos" />

                      <small class="text-muted"> Kamu dapat memilih lebih dari satu file </small>
                    </div>
                  </div>

                  <div class="col text-right mt-5">
                    <a
                      href="{{ Route('dashboard-products')}}"
                      class="btn btn-info"
                      >Back</a
                    >
                    @if ($user->store_name !== null)
                    <button class="btn btn-success px-5" type="submit">
                        Create Now
                    </button>
                    @else
                    <a
                      href="{{ Route('dashboard-setting-store')}}"
                      class="btn btn-primary"
                      >Buat Toko Dulu</a
                    >
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      
    </div>
  </div>
</div>
@endsection


@push('addon-script')
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace("editor");
</script>
@endpush