@extends('layouts.success')
@section('title')
    Galih Store | Success Cekout
@endsection
@section('content')
<div class="page-content page-success">
    <section class="section-success" data-aos="zoom-in">
        <div class="container">
            <div class="row align-items-center row-login justify-content-center">
                <div class="col-lg-6 text-center">
                    <img src="/images/success.svg" class="mb-4" alt="">
                    <h2>Transaction Proccesed!</h2>
                    <p>Silahkan tunggu konfirmasi email dari kami dan kami akan menginformasikan resi secepat mungkin!</p>
                    <div class="">
                        <a href="/dashboard.html" class="btn btn-success w-50 mt-4">My Dashboard</a>
                        <a href="/index.html" class="btn btn-signup  w-50 mt-2">Go to shipping</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>


@endsection