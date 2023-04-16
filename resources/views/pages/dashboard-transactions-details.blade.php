@extends('layouts.dashboard')
@section('title')
    Galih Store | Transactions Details
@endsection
@section('content')

<div class="section-content section-dashboard-home" data-aos="fade-up" >
      <div class="container-fluid">
        <div class="dashboard-heading">
          <h2 class="dashboard-title">#STORE0839</h2>
          <p class="dashboard-subtitle">
            Transactions /<span> Details</span>
          </p>
        </div>
        <div class="dashboard-content" id="transactionDetails">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 col-md-4">
                      <img
                        src="/images/products.jpg"
                        class="w-100 mb-3"
                        alt=""
                      />
                    </div>
                    <div class="col-12 col-md-8">
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="products-title">Customer Name</div>
                          <div class="products-subtitle">
                            Galih Zen Salim
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="products-title">Products Name</div>
                          <div class="products-subtitle">
                            Jam Alexander Crintine 345
                          </div>
                        </div>
                        <div class="col-6 col-md-6">
                          <div class="products-title">
                            Date of Transaction
                          </div>
                          <div class="products-subtitle">
                            12 Januari, 2020
                          </div>
                        </div>
                        <div class="col-6 col-md-6">
                          <div class="products-title">Payment Status</div>
                          <div class="products-subtitle text-danger">
                            Pending
                          </div>
                        </div>
                        <div class="col-6 col-md-6">
                          <div class="products-title">Total Amount</div>
                          <div class="products-subtitle">Rp. 120.000</div>
                        </div>
                        <div class="col-6 col-md-6">
                          <div class="products-title">Phone Number</div>
                          <div class="products-subtitle">
                            082282391065
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 mt-4">
                      <h5>Shipping Information</h5>
                    </div>
                    <div class="col-8">
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="products-title">Address 1</div>
                          <div class="products-subtitle">
                            Desa Muara Jambi
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="products-title">Address 2</div>
                          <div class="products-subtitle">
                            Rt 03 Dusun Sungai Melayu
                          </div>
                        </div>
                        <div class="col-6 col-md-6">
                          <div class="products-title">Province</div>
                          <div class="products-subtitle">Jambi</div>
                        </div>
                        <div class="col-6 col-md-6">
                          <div class="products-title">Kota/Kab</div>
                          <div class="products-subtitle">Jambi</div>
                        </div>
                        <div class="col-6 col-md-6">
                          <div class="products-title">Kode Pos</div>
                          <div class="products-subtitle">36382</div>
                        </div>
                        <div class="col-6 col-md-6">
                          <div class="products-title">Country</div>
                          <div class="products-subtitle">Indonesi</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="row">
                        <div class="col-12 col-md-4">
                          <div class="products-title">Shipping Status</div>
                          <select
                            class="form-control"
                            name="status"
                            id="status"
                            v-model="status"
                          >
                            <option value="PENDING">Pending</option>
                            <option value="SHIPPING">Shipping</option>
                            <option value="SUCCESS">Success</option>
                          </select>
                        </div>
                        <template v-if="status == 'SHIPPING'">
                          <div class="col-md-4">
                            <div class="products-title">Resi</div>
                            <input
                              type="text"
                              class="form-control"
                              name="resi"
                            />
                          </div>
                          <div class="col-md-4">
                            <button
                              type="submit"
                              class="btn btn-success btn-block mt-4"
                            >
                              Update Resi
                            </button>
                          </div>
                        </template>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-12 text-right">
                      <button type="submit" class="btn btn-success px-5">
                        Save Now
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
<script src="/vendor/vue/vue.js"></script>
<script>
  var transactionDetails = new Vue({
    el: "#transactionDetails",
    data: {
      status: "SHIPPING",
      resi: "JP039398388",
    },
  });
</script>
@endpush