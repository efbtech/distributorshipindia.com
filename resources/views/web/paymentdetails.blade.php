@extends('layouts.weblayout')
@section('content')
<section class="campaigns-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <h3>Apni Roti</h3>
                
                <h2>Payment Successfull</h2>
                <h2>Thank You for donation</h2>
                
                <h6>Transcation ID : {{ session('TID') }}</h6>
            </div>
        </div>
    </div>
</section>
@endsection