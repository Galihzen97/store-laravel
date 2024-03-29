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
                <div class="dashboard-card-subtitle">{{$customer}}</div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">Revenue</div>
                <div class="dashboard-card-subtitle">
                  Rp. {{number_format($revenue,0)}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-2">
              <div class="card-body">
                <div class="dashboard-card-title">Transactions</div>
                <div class="dashboard-card-subtitle">{{$transaction_count}}</div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-12 mt-2">
            <h5 class="mb-3">Recent Transactions</h5>
            @forelse ($transaction_data as $transaction)
            <a
              href="{{ Route ('dashboard-transactions-details', $transaction->id)}}"
              class="card card-list d-block"
             >
              <div class="card-body">
                <div class="row">
                  <div class="col-md-1">
                    <img  class="w-100 mb-2"
                      src="{{ Storage::url($transaction->product->galleries->first()->photos ?? '')}}"
                      alt=""
                    />
                  </div>
                  <div class="col-md-4">{{$transaction->product->name ?? ''}}</div>
                  <div class="col-md-3">  {{ $transaction->transaction->user->name ?? ''  }}</div>
                  <div class="col-md-3">{{$transaction->created_at->isoFormat('D MMMM Y') ?? ''}}</div>
                  <div class="col-md-1 d-none d-md-block">
                    <img
                      src="/images/dashboard-arrow-right.svg"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </a>
                
            @empty
          <div class="row">
            <div class="col-12 text-center">
              Not Founds Recent Transactions
            </div>
          </div>     
            @endforelse
            <section class="store-pagination">
              <div class="container">
              <div class="custom-pagination" >
                  {{ $transaction_data->links('pagination::bootstrap-4') }}
              </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

@endsection