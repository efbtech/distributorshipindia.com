@extends('layouts.weblayout')
@section('content')
<section class="campaigns-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <h3>Apni Roti</h3>
                <h2>Campaigns</h2>
            </div>
        </div>
    </div>
</section>
<section class="donation py-6">
    <div class="container-fluid px-md-5">
        <div class="single__slider owl-carousel">
        @if(isset($campList))
            @foreach ($campList as $list)
            <div class="item" style="background-image: url( {{asset($list->campaigns_feat_img)}} )">
                <div class="container">
                    <h3>{{ $list->campaigns_title }}</h3>
                    <p>{{ Str::limit($list->campaigns_comment, 60, '') }}</p>
                    <a href="{{ url('web/donate') }}"><button class="btn btn-red">DONATE</button></a>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
<section class="donation-activity pb-6">
    <div class="container">
        <div class="row">
            @if(isset($campList))
            @foreach ($campList as $list)
            <div class="col-md-4 col-sm-6">
                <div class="card card-activity text-center">
                    <img src="{{ asset($list->campaigns_feat_img) }}" alt="" class="card-img-top img-fluid">
                    <div class="card-activity-body p-4">
                        <h6>{{ $list->campaigns_title }}</h6>
                        <p>{{ Str::limit($list->campaigns_comment, 60, '') }}</p>
                        <a href="{{ url('web/campaign-details/'.$list->campaigns_slug) }}"><button
                                class="btn btn-red">Read More</button></a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            <div class="col-md-12 d-flex justify-content-between media_list-pagination">
                Showing {{count($campList)}} records of total {{ $campList->total() }}
                {{ $campList->links('vendor.pagination.pagination') }}
            </div>
        </div>
</section>
@endsection