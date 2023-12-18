@extends('layouts.dashboard')
@section('title')
    Cafamoon | {{ $products->name}}
@endsection
@section('content')
<div class="section-content section-dashboard-home"data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">{{ $products->name}}</h2>
      <p class="dashboard-subtitle">Product Details</p>
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
          <form action="{{Route ('dashboard-products-update', $products->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div
                  class="row"
                  data-aos="fade-up"
                  data-aos-delay="300"
                >
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Products Name</label>
                      <input
                        type="text"
                        class="form-control"
                        name="name" value="{{ $products->name}}"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Price</label>
                      <input
                        type="number"
                        name="price"
                        class="form-control"
                        value="{{$products->price}}"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Category</label>
                      <select name="categories_id" class="form-control">
                        <option value="{{ $products->categories_id}}">{{$products->category->name}}</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{ $category->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Description</label>
                      <textarea name="description" id="editor">{!! $products->description !!}</textarea>
                    </div>
                  </div>
                </div>
                <div
                  class="row"
                  data-aos="fade-up"
                  data-aos-delay="300"
                >
                  <div class="col text-right mt-5">
                    <button
                      class="btn btn-success px-5"
                      type="submit"
                    >
                      Update Now
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                @foreach ($products->galleries as $gallery)
                <div class="col-6 col-md-4">
                  <div class="gallery-container">
                    <img
                      src="{{Storage::url($gallery->photos ?? '')}}"
                      class="w-100"
                      alt=""
                    />
                    <a href="{{ Route('dashboard-products-gallery-delete', $gallery->id)}}">
                      <img
                        class="delete-gallery"
                        src="{{ url('/images/icon-delete.svg')}}"
                        alt=""
                      />
                    </a>
                  </div>
                </div>

                @endforeach
               
                <div class="col-12">
                  <form action="{{ Route('dashboard-products-gallery-upload')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden"  name="products_id" value="{{ $products->id}}">
                    <input
                    type="file"
                    id="file"
                    name="photos"
                    style="display: none"
                    onchange="form.submit()"
                  />
                  <button
                    class="btn btn-secondary btn-block mt-3" type="button"
                    onclick="thisUploadfile()"
                  >
                    Add Photo
                  </button>
                  </form>
                </div>
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
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
  function thisUploadfile() {
    document.getElementById("file").click();
  }
</script>
<script>
  CKEDITOR.replace("editor");
</script>
@endpush