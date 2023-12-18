@extends('layouts.dashboard')
@section('title')
    Cafamoon | My Account
@endsection
@section('content')
<div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">My Account</h2>
                <p class="dashboard-subtitle">Update your current profile</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <form action="{{ route('dashboard-setting-redirect','dashboard-setting-account') }}" method="POST" enctype="multipart/form-data" id="locations">
                      @csrf
                      <div class="card">
                        <div class="card-body">
                          <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="addresone">Your Name</label>
                                  <input type="text" class="form-control" name="name" id="name" value="{{ $user->name}}">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="addresTwo">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ $user->email}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="addresone"> Address 1</label>
                                    <input type="text" class="form-control" name="address_one" id="addressOne" value="{{ $user->address_one}}">
        
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="addresTwo"> Address 2</label>
                                    <input type="text" class="form-control" name="address_two" id="addressTwo" value="{{ $user->address_two}}">
        
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
                                  <select class="form-control" name="regencies_id" v-if="regencies" v-model="regencies_id" >
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
                                    <input type="text" class="form-control" name="zip_code" id="kodePos" value="{{ $user->zip_code}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for= "country ">Country</label>
                                    <input type="text" class="form-control" name="country" id="country " value="{{ $user->country}}">
        
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group ">
                                    <label for="phoneNumber ">Phone Number</label>
                                    <input type="text" class="form-control" name="phone_number" id="phoneNumber" value="{{ $user->phone_number}}">
        
                                </div>
                            </div>
                        
                          </div>
                          <div class="row" >
                            <div class="col text-right">
                              <button class="btn btn-success px-5">Save Now</button>
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
