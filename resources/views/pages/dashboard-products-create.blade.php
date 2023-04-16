@extends('layouts.dashboard')
@section('title')
    Galih Store | Create Products
@endsection
@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Create New Product</h2>
      <p class="dashboard-subtitle">Create your own product</p>
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
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Description</label>
                      <textarea id="editor"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Thumbnails</label>
                      <input type="file" class="form-control" />
                      <p class="text-muted mt-2">
                        <b>!</b> Kamu bisa memilih lebih dari satu
                        file
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="row"
                  data-aos="fade-up"
                  data-aos-delay="300"
                >
                  <div class="col text-right mt-5">
                    <a
                      href="/dashboard-products.html"
                      class="btn btn-info"
                      >Back</a
                    >
                    <button class="btn btn-success px-5">
                      Create Now
                    </button>
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