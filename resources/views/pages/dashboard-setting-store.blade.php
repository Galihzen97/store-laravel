@extends('layouts.dashboard')
@section('title')
    Galih Store | Store Setting
@endsection

@section('content')

<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Store Settings</h2>
      <p class="dashboard-subtitle">Make store that profitable</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <form action="{{ Route('dashboard-setting-redirect', 'dashboard-setting-store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div
                  class="row"
                  data-aos="fade-up"
                  data-aos-delay="300"
                >
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nama Toko</label>
                      <input
                        type="text"
                        class="form-control"
                        name="store_name"
                        value="{{ $user->store_name ? $user->store_name : $user->name }}"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nama Kategory</label>
                      <select name="categories_id" class="form-control">
                        @if ($user->category)
                        <option value="{{ $user->categories_id }}">
                            {{ $user->category->name }}
                        </option>
                    @else
                        <option value="">
                            Belum Ada
                        </option>
                    @endif
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{ $category->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Store Status</label>
                      <p class="text-muted">
                        Apakah saat ini toko anda buka?
                      </p>
                      <div
                        class="custom-control custom-radio custom-control-inline"
                      >
                        <input
                          type="radio"
                          class="custom-control-input"
                          name="status"
                          id="storeOpenTrue"
                          value="1"
                          {{ $user->status == 1 ? 'checked':''}}
                        />
                        <label
                          for="storeOpenTrue"
                          class="custom-control-label"
                          >Buka</label
                        >
                      </div>
                      <div
                        class="custom-control custom-radio custom-control-inline"
                      >
                        <input
                          type="radio"
                          class="custom-control-input"
                          name="status"
                          id="storeOpenFalse"
                          value= "0"
                          {{ $user->status == 0 || $user->status == NULL ? 'checked':''}}
                        />
                        <label
                          for="storeOpenFalse"
                          class="custom-control-label"
                          >Sementara Tutup</label
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="row"
                  data-aos="fade-up"
                  data-aos-delay="300"
                >
                  <div class="col text-right mt-5">
                    <button type="submit" class="btn btn-success px-5"> 
                      Save Now
                    </button>
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