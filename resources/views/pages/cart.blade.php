@extends('layouts.auth')
@section('title')
    Galih Store | Cart Page
@endsection
@push('prepend-style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
@endpush
@section('content')
<div class="page-content page-cart">
  <section class="store-breadcrumb" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav>
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                              <a href="{{ Route('home')}}">Home</a>
                          </li>
                          <li class="breadcrumb-item active">
                              Cart
                          </li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
  </section>

  <section class="store-cart">
      <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-12 table-responsive">
                  <table class="table table-borderless table-cart">
                      <thead>
                          <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Product &amp; Penjual</th>
                            <th>Price</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @php
                            $totalprice = 0;
                            $id = 1;
                        @endphp
                        @forelse ($carts as $cart)
                        <tr>
                            <td style="width: 5%;">{{ $id++}}.</td>
                            <td style="width: 15%;">
                                @if ($cart->product->galleries->isNotEmpty())
                                <img class="cart-image" src="{{ Storage::url($cart->product->galleries->first()->photos)}}" alt="">
                                @else
                                <img src="/images/no_image.jpg" class="cart-image"  />
                                @endif
                                

                            </td>
                            <td style="width: 40%;">
                                <div class="product-tittle">{{$cart->product->name}}</div>
                                <div class="product-subtittle">{{$cart->product->user->name}}</div>
                            </td>
                            <td style="width: 20%;">
                                <div class="product-tittle">Rp. {{number_format($cart->product->price,0)}}</div>
                            </td>
                            <td style="width: 15%;">
                               <form action="{{ Route('cart-delete', $cart->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-remove-cart">
                                    Remove
                                </button>
                               </form>
                            </td>
                        </tr>
                        @php
                            $totalprice += $cart->product->price
                        @endphp
                        @empty
                        <tr>
                            <td>No Product Found</td>
                        </tr>
                      @endforelse
                          
                         
                      </tbody>
                  </table>
              </div>
          </div>
          <div class="row " data-aos="fade-up" data-aos-delay="150">
              <div class="col-12">
                  <hr>
              </div>
              <div class="col-12">
                  <h2 class="mb-4">Shipping Details</h2>
              </div>
          </div>
         <form action="{{ Route('checkout')}}" method="POST" enctype="multipart/form-data" id="locations">
            @csrf
            <input type="hidden" name="total_price" value="{{$totalprice}}">
            <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="addressOne"> Address 1 <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="address_one" id="addressOne" placeholder="Masukan alamat 1" required>
  
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="addressTwo"> Address 2</label>
                        <input type="text" class="form-control" name="address_two" id="addressTwo" placeholder="Masukan alamat ke 2">
  
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Provinsi<span class="text-danger">*</span></label>
                        <select class="form-control" name="provinces_id" v-if="provinces" v-model="provinces_id" required>
                            <option value="" disabled selected>-- Silahkan Pilih Provinsi --</option>
                            <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                        </select>
                        <select v-else class="form-control">
                            <option value="" disabled selected>-- Silahkan Pilih Provinsi --</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Kota/Kab<span class="text-danger">*</span></label>
                        <select class="form-control" name="regencies_id" v-if="regencies" v-model="regencies_id" required>
                            <option value="" disabled selected>-- Silahkan Pilih Kota --</option>
                            <option v-for="regency in regencies" :value="regency.id">@{{ regency.name}}</option>
                        </select>
                        <select v-else class="form-control">
                            <option value="" disabled selected>-- Silahkan Pilih Provinsi --</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="kodePos">Kode Pos</label>
                        <input type="text" class="form-control" name="zip_code" id="kodePos" placeholder="Masukan Kode Pos">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Contries">Negara</label>
                        <input type="text" class="form-control" name="country" id="Contries" autocomplete="contries" placeholder="Masukan nama negara">
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="form-group ">
                        <label for="phoneNumber">Phone Number<span class="text-danger">*</span></label>
                        <input type="text " class="form-control " name="phone_number" id="phoneNumber" placeholder="Masukan no telepon" required>
                    </div>
                </div>
            </div>
            <div class="row " data-aos="fade-up" data-aos-delay="150">
                <div class="col-12">
                    <hr>
                </div>
                <div class="col-12">
                    <h2 class="mb-1">Payment Information</h2>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-4 col-md-2">
                    <div class="product-tittle">Rp.0</div>
                    <div class="product-subtittle">Country TAx</div>
                </div>
                <div class="col-4 col-md-3">
                    <div class="product-tittle">Rp.0</div>
                    <div class="product-subtittle">Asuransi</div>
                </div>
                <div class="col-4 col-md-2">
                    <div class="product-tittle">Rp.0</div>
                    <div class="product-subtittle">Ship To Jambi</div>
                </div>
                <div class="col-4 col-md-2">
                    <div class="product-tittle text-success">Rp. {{ number_format($totalprice ?? 0)}}</div>
                    <div class="product-subtittle">Total</div>
                </div>
                <div class="col-8 col-md-3">
                    <button type="submit" class="btn btn-success mt-4 px-4 btn-block">Checkout Now</button>
                </div>
            </div>
         </form>
      </div>
  </section>


</div>

@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js "></script>
<script src="https://unpkg.com/vue-toasted"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    var locations = new Vue({
        el: "#locations ",
        mounted() {
            this.getProvincesData();
            AOS.init();
        },
        data: {
            provinces: null,
            regencies: null,
            provinces_id: null,
            regencies_id: null,
        },
        methods: {
            getProvincesData() {
                var self = this;
                axios.get('{{ route('api-provinces') }}')
                .then(function (response) {
                    self.provinces = response.data;
                })
            },
            getRegenciesData() {
                var self = this;
                axios.get('{{ url('api/regencies') }}/'+ self.provinces_id)
                .then(function (response) {
                    self.regencies = response.data;
                })
            },
        },
        watch: {
            provinces_id: function(val, oldVald) {
                this.regencies_id = null;
                this.getRegenciesData();
            }
        }
    });
</script>
@endpush
