@extends('layouts.dashboard')
@section('title')
    Galih Store | Dashboard
@endsection
@section('content')

  <!-- Section Content -->
  <div class="section-content section-dashboard-home" data-aos="fade-up" >
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Dashboard</h2>
        <p class="dashboard-subtitle">Look what you have made today!</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">Customer</div>
                <div class="dashboard-card-subtitle">22,908</div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">Revenue</div>
                <div class="dashboard-card-subtitle">
                  Rp. 20.000.0000
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">Transactions</div>
                <div class="dashboard-card-subtitle">22,000,99</div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-12 mt-2">
            <h5 class="mb-3">Recent Transactions</h5>
            <a
              href="/dashboard-transactions-details.html"
              class="card card-list d-block"
            >
              <div class="card-body">
                <div class="row">
                  <div class="col-md-1">
                    <img
                      src="/images/dashboard-icon-product-1.png"
                      alt=""
                    />
                  </div>
                  <div class="col-md-4">Shirup Marzzan</div>
                  <div class="col-md-3">Galih Zen Salim</div>
                  <div class="col-md-3">12 Januari, 2020</div>
                  <div class="col-md-1 d-none d-md-block">
                    <img
                      src="/images/dashboard-arrow-right.svg"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </a>
            <a
              href="/dashboard-transactions-details.html"
              class="card card-list d-block"
            >
              <div class="card-body">
                <div class="row">
                  <div class="col-md-1">
                    <img
                      src="/images/dashboard-icon-product-2.png"
                      alt=""
                    />
                  </div>
                  <div class="col-md-4">Macbook Pro</div>
                  <div class="col-md-3">Prayogo Pangestu</div>
                  <div class="col-md-3">12 Mey, 2020</div>
                  <div class="col-md-1 d-none d-md-block">
                    <img
                      src="/images/dashboard-arrow-right.svg"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </a>
            <a
              href="/dashboard-transactions-details.html"
              class="card card-list d-block"
            >
              <div class="card-body">
                <div class="row">
                  <div class="col-md-1">
                    <img
                      src="/images/dashboard-icon-product-3.png"
                      alt=""
                    />
                  </div>
                  <div class="col-md-4">Sofa Ternyaman</div>
                  <div class="col-md-3">Arif Pujianto</div>
                  <div class="col-md-3">12 Januari, 2020</div>
                  <div class="col-md-1 d-none d-md-block">
                    <img
                      src="/images/dashboard-arrow-right.svg"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

@endsection