@extends('layouts.app')
@section('title')
    Galih Store | Detail Page
@endsection
@section('content')
<div class="page-content page-details">
  <section class="store-breadcrumb" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav>
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                              <a href="/index.html">Home</a>
                          </li>
                          <li class="breadcrumb-item active">
                              Products Detail
                          </li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
  </section>

  <section class="store-gallery" id="gallery">
      <div class="container">
          <div class="row">
              <div class="col-lg-8" data-aos="zoom-in">
                  <transition name="slide-fade" mode="out-in">
                      <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" class="w-100 main-image" alt="">
                  </transition>
              </div>
              <div class="col-lg-2">
                  <div class="row">
                      <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id" data-aos="zoom-in" data-aos-delay="100">
                          <a href="#" @click="changeActive(index)">
                              <img :src="photo.url" class="w-100 thumbnail-image" :class="{ active: index == activePhoto}" alt="">
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <div class="store-details" data-aos="fade-up">
      <section class="store-heading">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8">
                      <h1>Sofa Ternyaman</h1>
                      <div class="owner"> By Galih Zen Salim</div>
                      <div class="price">Rp. 8.000.000</div>
                  </div>
                  <div class="col-lg-2" data-aos="zoom-in">
                      <a href="{{ Route('cart')}}" class="btn btn-success px-4 text-white mb-3 btn-block">Add to Cart</a>
                  </div>
              </div>
          </div>
      </section>
      <section class="store-description" data-aos="fade-right" data-aos-delay="100">
          <div class="container ">
              <div class="row ">
                  <div class="col-12 col-lg-8 ">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quos atque fugit molestiae ad provident impedit a natus eos amet.</p>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla officia quis exercitationem sapiente molestias accusamus incidunt et, necessitatibus iure suscipit hic blanditiis dolore! Dignissimos culpa perspiciatis aperiam,
                          ipsam, voluptates, iure explicabo dolor labore non dolorum asperiores? Est officiis placeat error.</p>
                  </div>
              </div>
          </div>
      </section>
      <section class="store-review" data-aos="fade-up">
          <div class=" container ">
              <div class="row ">
                  <div class="col-12 col-lg-8 mt-3 mb-3 ">
                      <h5>Customer Review (3)</h5>
                  </div>
              </div>
              <div class="row ">
                  <div class="col-12 col-lg-8 ">
                      <ul class="list-unstyled ">
                          <li class="media ">
                              <img src="/images/review1.png " class="mr-3 mt-2 rounded-circle " alt=" ">
                              <div class="media-body ">
                                  <h5 class="mt-2 mb-1 ">Angeli Sucita</h5>
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur nulla pariatur quo dicta vero vitae aliquam quia impedit inventore magnam?
                              </div>
                          </li>
                          <li class="media ">
                              <img src="/images/review2.png " class="mr-3 mt-2 rounded-circle " alt=" ">
                              <div class="media-body ">
                                  <h5 class="mt-2 mb-1 ">Prayogo Pangestu</h5>
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur nulla pariatur quo dicta vero vitae aliquam quia impedit inventore magnam?
                              </div>
                          </li>
                          <li class="media ">
                              <img src="/images/review3.png " class="mr-3 mt-2 rounded-circle " alt=" ">
                              <div class="media-body ">
                                  <h5 class="mt-2 mb-1 ">Megaria Lestari</h5>
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur nulla pariatur quo dicta vero vitae aliquam quia impedit inventore magnam?
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </section>

  </div>
</div>

@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js "></script>
<script>
    var gallery = new Vue({
        el: "#gallery ",
        mounted() {
            AOS.init();
        },
        data: {
            activePhoto: 0,
            photos: [{
                id: 1,
                url: "/images/detail.jpg "
            }, {
                id: 2,
                url: "/images/detail2.jpg "
            }, {
                id: 3,
                url: "/images/detail3.jpg "
            }, {
                id: 4,
                url: "/images/detail4.jpg "
            }, ],
        },
        methods: {
            changeActive(id) {
                this.activePhoto = id;
            },
        },
    });
</script>
@endpush