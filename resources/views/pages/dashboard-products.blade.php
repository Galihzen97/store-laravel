@extends('layouts.dashboard')
@section('title')
    Galih Store | My Products
@endsection
@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">My Products</h2>
      <p class="dashboard-subtitle">Manage it well and get money</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <a
            href="/dashboard-products-create.html"
            class="btn btn-success"
            >Add New Product</a
          >
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a
            href="/dashboard-products-details.html"
            class="card card-dashboard-products d-block"
          >
            <div class="card-body">
              <img
                src="/images/products.jpg"
                alt=""
                class="w-100 mb-2"
              />
              <div class="products-title">Jam Alexander Crintine</div>
              <div class="products-category">Foods</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a
            href="/dashboard-products-details.html"
            class="card card-dashboard-products d-block"
          >
            <div class="card-body">
              <img
                src="/images/products1.jpg"
                alt=""
                class="w-100 mb-2"
              />
              <div class="products-title">Jam Alexander Crintine</div>
              <div class="products-category">Foods</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a
            href="/dashboard-products-details.html"
            class="card card-dashboard-products d-block"
          >
            <div class="card-body">
              <img
                src="/images/products2.jpg"
                alt=""
                class="w-100 mb-2"
              />
              <div class="products-title">Jam Alexander Crintine</div>
              <div class="products-category">Foods</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a
            href="/dashboard-products-details.html"
            class="card card-dashboard-products d-block"
          >
            <div class="card-body">
              <img
                src="/images/products3.jpg"
                alt=""
                class="w-100 mb-2"
              />
              <div class="products-title">Jam Alexander Crintine</div>
              <div class="products-category">Foods</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a
            href="/dashboard-products-details.html"
            class="card card-dashboard-products d-block"
          >
            <div class="card-body">
              <img
                src="/images/products4.jpg"
                alt=""
                class="w-100 mb-2"
              />
              <div class="products-title">Jam Alexander Crintine</div>
              <div class="products-category">Foods</div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection