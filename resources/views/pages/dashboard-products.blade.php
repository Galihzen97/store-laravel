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
        @if ($user->store_name !== null)
        <a
        href="{{Route ('dashboard-products-add')}}"
        class="btn btn-success"
        >✚ Add New Product</a
         >
        @else
        <a
          href="{{ Route('dashboard-setting-store')}}"
          class="btn btn-success"
          >Buat Toko Dulu</a
        >
        @endif
        
        </div>
      </div>
      <div class="row mt-4">
        @forelse ($products as $product)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <a
            href="{{ Route('dashboard-products-details', $product->id)}}"
            class="card card-dashboard-products d-block"
          >
            <div class="card-body">
              <img 
              src="{{ Storage::url($product->galleries->first()->photos ?? '')}}"
                alt=""
                class="w-100 mb-2"
              />
              <div class="products-title">{{ $product->name}}</div>
              <div class="products-category">{{ $product->category->name}}</div>
            </div>
          </a>
        </div> 
        @empty
          <div class="col-12 text-center">
           No Products Founds  
          </div> 
        @endforelse
      </div>
    </div>
  </div>
</div>
@endsection