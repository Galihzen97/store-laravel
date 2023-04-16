@extends('layouts.dashboard')
@section('title')
    Galih Store | My Account
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
                    <form action="">
                      <div class="card">
                        <div class="card-body">
                          <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="addresone">Your Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="Galih Zen Salim">
                                </div>
                               </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="addresTwo">Email</label>
                                  <input type="email" class="form-control" name="email" id="email" value="Galihwik@gmail.com">
      
                              </div>
                          </div>
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