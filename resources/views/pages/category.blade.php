@extends('layouts.app')
@section('title')
    Galih Store | Category
@endsection
@section('content')
<div class="page-content page-home">
  <!-- Trend Categories Start -->
  <section class="trend-categories mt-4">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>All Categories</h5>
        </div>
      </div>
      <div class="row">
        @php
          $incrementCategory = 0
        @endphp
        @forelse ($categories as $category)
        <div
        class="col-3 col-md-3 col-lg-2"
        data-aos="fade-up"
        data-aos-delay="{{ $incrementCategory+= 100}}"
        >
        <a href="{{ route('categories-detail', $category->slug)}}" class="component-categories d-block">
          <div class="categories-image">
            <img src="{{  Storage::url($category->photo)}}" class="w-100 img-fluid" alt="" />
            <p class="categories-text">{{ $category->name  }}</p>
          </div>
        </a>
        </div>
        @empty
          <div class="col-12 text-center py-5" 
          data-aos="fade-up"
          data-aos-delay="100">
            No Categories Founds
          </div>
        @endforelse
      
      </div>
    </div>
  </section>
  <!-- Trend Categories end -->

  <!-- All Product start -->
  <section class="store-new-products">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>All Products</h5>
        </div>
      </div>
      <div class="row">
        @php
            $incrementProduct = 100
        @endphp
        @forelse ($products as $product)
        <div
        class="col-6 col-md-4 col-lg-3"
        data-aos="fade-up"
        data-aos-delay="{{ $incrementProduct+= 100}}"
        >
        <a href="{{ route('detail', $product->slug)}}" class="components-products d-block">
          <div class="products-thumbnail">
            <div 
            class="products-image" 
            style="@if($product->galleries->isNotEmpty()) 
                    background-image: url('{{ Storage::url($product->galleries->first()->photos) }}') 
                   @else 
                    background-color: #eee 
                   @endif;">
            </div>
          </div>
          <div class="products-text">{{$product->name}}</div>
          <div class="products-price">Rp. {{ number_format($product->price, 0)}}</div>
        </a>
        </div>
        @empty
            <div class="col-12 text-center py-5" 
            data-aos="fade-up"
            data-aos-delay="100">
              No Products Founds
            </div>
        @endforelse
      </div>
    </div>
  </section>
  <section class="store-pagination">
    <div class="container">
    <div class="custom-pagination"
        data-aos="fade-down"
        data-aos-delay="200">
       {{$products->links('pagination::bootstrap-4')}}
    </div>
  </div>
  </section>
  
 
  <!-- New Product end -->
</div>

@endsection