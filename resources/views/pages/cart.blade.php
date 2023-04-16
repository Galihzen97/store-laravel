@extends('layouts.app')
@section('title')
    Galih Store | Cart Page
@endsection
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
                              <th>Image</th>
                              <th>Product &amp; Penjual</th>
                              <th>Price</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td style="width: 20%;">
                                  <img class="cart-image" src="/images/products2.jpg" alt="">

                              </td>
                              <td style="width: 35%;">
                                  <div class="product-tittle">Sofa Ternyaman</div>
                                  <div class="product-subtittle">By Galih Zen Salim</div>
                              </td>
                              <td style="width: 35%;">
                                  <div class="product-tittle">Rp 8.000.000</div>
                              </td>
                              <td style="width: 20%;">
                                  <a href="#" class="btn btn-remove-cart">Remove</a>
                              </td>
                          </tr>
                          <tr>
                              <td style="width: 20%;">
                                  <img class="cart-image" src="/images/products1.jpg" alt="">

                              </td>
                              <td style="width: 35%;">
                                  <div class="product-tittle">Sofa Ternyaman</div>
                                  <div class="product-subtittle">By Galih Zen Salim</div>
                              </td>
                              <td style="width: 35%;">
                                  <div class="product-tittle">Rp 8.000.000</div>
                              </td>
                              <td style="width: 20%;">
                                  <a href="#" class="btn btn-remove-cart">Remove</a>
                              </td>
                          </tr>
                          <tr>
                              <td style="width: 20%;">
                                  <img class="cart-image" src="/images/products3.jpg" alt="">

                              </td>
                              <td style="width: 35%;">
                                  <div class="product-tittle">Sofa Ternyaman</div>
                                  <div class="product-subtittle">By Galih Zen Salim</div>
                              </td>
                              <td style="width: 35%;">
                                  <div class="product-tittle">Rp 8.000.000</div>
                              </td>
                              <td style="width: 20%;">
                                  <a href="#" class="btn btn-remove-cart">Remove</a>
                              </td>
                          </tr>
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
          <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="addresone"> Address 1</label>
                      <input type="text" class="form-control" name="addressOne" id="addressOne" value="Muara Jambi">

                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="addresTwo"> Address 2</label>
                      <input type="text" class="form-control" name="addressTwo" id="addressTwo" value="Desa Muara Jambi">

                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                      <label for="province">Provinsi</label>
                      <select class="form-control" name="province" id="province">
                          <option value="">--Silahkan Pilih Provinsi--</option>
                          <option value="Jambi">Jambi</option>
                      </select>

                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                      <label for="city">Kota/Kab</label>
                      <select class="form-control" name="city" id="city">
                          <option value="">--Silahkan Pilih Kota--</option>
                          <option value="Jambi">Kota Jambi</option>
                      </select>

                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                      <label for="kodePos">Kode Pos</label>
                      <input type="text" class="form-control" name="kodePos" id="kodePos" value="36382">

                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for=country ">Country</label>
                      <input type="text " class="form-control " name="country " id="country " value="Indonesia ">

                  </div>
              </div>
              <div class="col-md-6 ">
                  <div class="form-group ">
                      <label for=phoneNumber ">Phone Number</label>
                      <input type="text " class="form-control " name="phoneNumber " id="phoneNumber" value="082282381065">

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
                  <div class="product-tittle">Rp. 20.000</div>
                  <div class="product-subtittle">Country TAx</div>
              </div>
              <div class="col-4 col-md-3">
                  <div class="product-tittle">Rp. 10.000</div>
                  <div class="product-subtittle">Asuransi</div>
              </div>
              <div class="col-4 col-md-2">
                  <div class="product-tittle">Rp. 30.000</div>
                  <div class="product-subtittle">Ship To Jambi</div>
              </div>
              <div class="col-4 col-md-2">
                  <div class="product-tittle text-success">Rp. 50.000</div>
                  <div class="product-subtittle">Total</div>
              </div>
              <div class="col-8 col-md-3">
                  <a href="/success.html" class="btn btn-success mt-4 px-4 btn-block">Checkout Now</a>
              </div>
          </div>
      </div>
  </section>


</div>

@endsection