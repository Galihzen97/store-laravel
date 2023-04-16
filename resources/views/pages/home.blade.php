@extends('layouts.app')
@section('title')
    Galih Store | Home
@endsection
@section('content')
<div class="page-content page-home">
    <!-- Carousel Start -->
    <section class="store-carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <div
              id="storeCarousel"
              class="carousel slide"
              data-ride="carousel"
            >
              <ol class="carousel-indicators">
                <li
                  class="active"
                  data-target="#storeCarousel"
                  data-slide-to="0"
                ></li>
                <li data-target="#storeCarousel" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="/images/banner.jpg"
                    alt=""
                    class="d-block w-100"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="/images/banner.jpg"
                    alt=""
                    class="d-block w-100"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Carousel End -->

    <!-- Trend Categories Start -->
    <section class="trend-categories mt-4">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Trend Categories</h5>
          </div>
        </div>
        <div class="row">
          <div
            class="col-3 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <a href="#" class="component-categories d-block ">
              <div class="categories-image">
                <img src="/images/Group 14.svg" class="w-100" alt="" />
                <p class="categories-text">Gadgets</p>
              </div>
            </a>
          </div>
          <div
            class="col-3 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/Group 15.svg" class="w-100" alt="" />
                <p class="categories-text">Furiture</p>
              </div>
            </a>
          </div>
          <div
            class="col-3 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/Group 16.svg" class="w-100" alt="" />
                <p class="categories-text">Makeup</p>
              </div>
            </a>
          </div>
          <div
            class="col-3 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/Group 17.svg" class="w-100" alt="" />
                <p class="categories-text">Sneaker</p>
              </div>
            </a>
          </div>
          <div
            class="col-3 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/Group 18.svg" class="w-100" alt="" />
                <p class="categories-text">Tools</p>
              </div>
            </a>
          </div>
          <div
            class="col-3 col-md-3 col-lg-2"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/Group 20.svg" class="w-100" alt="" />
                <p class="categories-text">Baby</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Trend Categories end -->

    <!-- New Product start -->
    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>New Products</h5>
          </div>
        </div>
        <div class="row">
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <a href="http://127.0.0.1:8000/details/3" class="components-products d-block">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="background-image: url('/images/products.jpg')"
                ></div>
              </div>
              <div class="products-text">Apple Watch 4</div>
              <div class="products-price">Rp. 4.000.000</div>
            </a>
          </div>
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <a href="http://127.0.0.1:8000/details/3" class="components-products d-block">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="background-image: url('/images/products1.jpg')"
                ></div>
              </div>
              <div class="products-text">Orange Buggota</div>
              <div class="products-price">Rp. 3.000.000</div>
            </a>
          </div>
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <a href="http://127.0.0.1:8000/details/3" class="components-products d-block">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="background-image: url('/images/products2.jpg')"
                ></div>
              </div>
              <div class="products-text">Sofa Ternyaman</div>
              <div class="products-price">Rp. 5.000.000</div>
            </a>
          </div>
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <a href="http://127.0.0.1:8000/details/3" class="components-products d-block">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="background-image: url('/images/products3.jpg')"
                ></div>
              </div>
              <div class="products-text">Bubuk Maketti</div>
              <div class="products-price">Rp. 40.000</div>
            </a>
          </div>
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <a href="http://127.0.0.1:8000/details/3" class="components-products d-block">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="background-image: url('/images/products4.jpg')"
                ></div>
              </div>
              <div class="products-text">Tatakan Gelas</div>
              <div class="products-price">Rp. 45.000</div>
            </a>
          </div>
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <a href="http://127.0.0.1:8000/details/3" class="components-products d-block">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="background-image: url('/images/products5.jpg')"
                ></div>
              </div>
              <div class="products-text">Mavic KW</div>
              <div class="products-price">Rp. 300.000</div>
            </a>
          </div>
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="700"
          >
            <a href="http://127.0.0.1:8000/details/3" class="components-products d-block">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="background-image: url('/images/products6.jpg')"
                ></div>
              </div>
              <div class="products-text">Black Edition Nike</div>
              <div class="products-price">Rp. 8.000.000</div>
            </a>
          </div>
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="800"
          >
            <a href="http://127.0.0.1:8000/details/3" class="components-products d-block">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="background-image: url('/images/products7.jpg')"
                ></div>
              </div>
              <div class="products-text">Monkey Toys</div>
              <div class="products-price">Rp. 45.000</div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- New Product end -->
</div>

@endsection