@extends('layouts.dashboard')
@section('title')
    Galih Store | Transactions
@endsection
@section('content')

<div class="section-content section-dashboard-home" data-aos="fade-up" >
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Transactions</h2>
      <p class="dashboard-subtitle">
        Big result start from the small one
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12 mt-2">
          <ul
            class="nav nav-pills mb-3"
            id="pills-tab"
            role="tablist"
          >
            <li class="nav-item">
              <a
                class="nav-link active"
                id="pills-home-tab"
                data-toggle="pill"
                href="#pills-home"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
                >Sell Product</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="pills-profile-tab"
                data-toggle="pill"
                href="#pills-profile"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
                >Buy Product</a
              >
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div
              class="tab-pane fade show active"
              id="pills-home"
              role="tabpanel"
              aria-labelledby="pills-home-tab"
            >

            @forelse ($selltransactions as $transaction)
            <a
            href="{{ Route ('dashboard-transactions-details', $transaction->id)}}"
            class="card card-list d-block"
          >
            <div class="card-body">
              <div class="row">
                <div class="col-md-1">
                  <img
                  style="max-width: 100%"
                  src="{{ Storage::url($transaction->product->galleries->first()->photos ?? '')}}"
                    alt=""
                  />
                </div>
                <div class="col-md-4">{{$transaction->product->name ?? ''}}</div>
                <div class="col-md-3">{{$transaction->transaction->user->name ?? ''}}</div>
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
              <div class="col-12 py-5 text-center">
                No Transaction Sell Founds
              </div>
            </div>
            @endforelse
            <section class="store-pagination">
              <div class="container">
              <div class="custom-pagination" >
                  {{ $selltransactions->links('pagination::bootstrap-4') }}
              </div>
              </div>
            </section>
            </div>
            <div
              class="tab-pane fade"
              id="pills-profile"
              role="tabpanel"
              aria-labelledby="pills-profile-tab"
            >
           
            @forelse ($buytransactions as $transaction)
            <a
            href="{{ Route ('dashboard-transactions-details', $transaction->id)}}"
            class="card card-list d-block"
          >
            <div class="card-body">
              <div class="row">
                <div class="col-md-1">
                  <img
                  style="max-width: 100%"
                  src="{{ Storage::url($transaction->product->galleries->first()->photos ?? '')}}"
                    alt=""
                  />
                </div>
                <div class="col-md-4">{{$transaction->product->name ?? ''}}</div>
                <div class="col-md-3">
                  {{ $transaction->product->user->store_name ?? '' }}
                </div>
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
                  <div class="col-12 py-5 text-center">
                    No Transaction Buy Founds
                  </div>
                </div>
            @endforelse
            <section class="store-pagination">
              <div class="container">
              <div class="custom-pagination" >
                  {{ $buytransactions->links('pagination::bootstrap-4') }}
              </div>
              </div>
            </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection