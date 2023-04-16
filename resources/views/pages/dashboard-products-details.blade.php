@extends('layouts.dashboard')
@section('title')
    Galih Store | Products Details
@endsection
@section('content')
<div class="section-content section-dashboard-home"data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Jam Alexander Crintine type 340</h2>
      <p class="dashboard-subtitle">Product Details</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <form action="">
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
                        value="Jam Alexander Crintine type 340"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Price</label>
                      <input
                        type="number"
                        class="form-control"
                        value="120000"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Category</label>
                      <select name="category" class="form-control">
                        <option value="">--Pilih Kategory--</option>
                        <option value="">Snaker</option>
                        <option value="">Furniture</option>
                        <option value="" selected>Elektronik</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Description</label>
                      <textarea id="editor"></textarea>
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
                      Create Now
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
                <div class="col-6 col-md-4">
                  <div class="gallery-container">
                    <img
                      src="/images/products.jpg"
                      class="w-100"
                      alt=""
                    />
                    <a href="#">
                      <img
                        class="delete-gallery"
                        src="{{ url('/images/icon-delete.svg')}}"
                        alt=""
                      />
                    </a>
                  </div>
                </div>
                <div class="col-6 col-md-4">
                  <div class="gallery-container">
                    <img
                      src="/images/products1.jpg"
                      class="w-100"
                      alt=""
                    />
                    <a href="#">
                      <img
                        class="delete-gallery"
                        src="/images/icon-delete.svg"
                        alt=""
                      />
                    </a>
                  </div>
                </div>
                <div class="col-6 col-md-4">
                  <div class="gallery-container">
                    <img
                      src="/images/products2.jpg"
                      class="w-100"
                      alt=""
                    />
                    <a href="#">
                      <img
                        class="delete-gallery"
                        src="/images/icon-delete.svg"
                        alt=""
                      />
                    </a>
                  </div>
                </div>
                <div class="col-6 col-md-4">
                  <div class="gallery-container">
                    <img
                      src="/images/products3.jpg"
                      class="w-100"
                      alt=""
                    />
                    <a href="#">
                      <img
                        class="delete-gallery"
                        src="/images/icon-delete.svg"
                        alt=""
                      />
                    </a>
                  </div>
                </div>
                <div class="col-12">
                  <input
                    type="file"
                    id="file"
                    style="display: none"
                    multiple
                  />
                  <button
                    class="btn btn-secondary btn-block mt-3"
                    onclick="thisUploadfile()"
                  >
                    Add Photo
                  </button>
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