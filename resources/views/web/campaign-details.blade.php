@extends('layouts.weblayout')
@section('content')
<section class="donation-amount py-5">
    <div class="container">
        <ul class="breadcrumb">
            <li class="back"><a href="{{ url()->previous() }}"><img src="{{ asset('assets/web/image/campaigns/arrow-back.png') }}" alt="">
                    Back</a></li>
            <li><a href="{{ url('') }}">Home</a></li>
            <li><a href="{{ url('web/campaigns') }}">Campaigns</a></li>
            <li class="active"><a href="#">{{ $campDetail->campaigns_title }}</a></li>
        </ul>
        <div class="row">
            <div class="col-lg-8 col-md-7 col-12 order-2 order-md-1">
                <img src="{{ asset($campDetail->campaigns_detail_img) }}" alt="" class="img-fluid w-100">
                <h5 class="py-4">{{ $campDetail->campaigns_title }}</h5>
                <p>{!! $campDetail->campaigns_desc !!}</p>
            </div>
            <div class="col-lg-4 col-md-5 col-12 order-1 order-md-2">
                <div class="donation-card">
                    <div class="row donate_content">
                        <h3 class="text-center donte_heading">Donation Amount</h3>
                        <div class="col-12 form-check">
                            <ul class="nav nav-tabs donation_tabs border-0 pb-5 justify-content-center" id="myTab"
                                role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">One-Time</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Monthly</button>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <form class="row custom-dontaion-check-mobile"
                                        action="{{ url('web/donation-payment') }}" method="post" id="donationForm">
                                        @csrf
                                        <div class="col-4 form-check">
                                            <input type="hidden" name="purpose" value="Donation">
                                            <input type="radio" class="form-check-input amountone" name="amountone"
                                                id="amount1" value="100" checked hidden
                                                onclick="removeRequired('customamountonetime','donateTextOneTime','amountone')">
                                            <label class="form-check-label" for="amount1">₹ 100</label>
                                        </div>
                                        <div class="col-4 form-check">
                                            <input type="radio" class="form-check-input amountone" name="amountone"
                                                id="amount2" value="500" hidden
                                                onclick="removeRequired('customamountonetime','donateTextOneTime','amountone')">
                                            <label class="form-check-label" for="amount2">₹ 500</label>
                                        </div>
                                        <div class="col-4 form-check">
                                            <input type="radio" class="form-check-input amountone" name="amountone"
                                                id="amount3" value="1000" hidden
                                                onclick="removeRequired('customamountonetime','donateTextOneTime','amountone')">
                                            <label class="form-check-label" for="amount3">₹ 1000</label>
                                        </div>
                                        <div class="col-4 form-check">
                                            <input type="radio" class="form-check-input amountone" name="amountone"
                                                id="amount4" value="10000" hidden
                                                onclick="removeRequired('customamountonetime','donateTextOneTime','amountone')">
                                            <label class="form-check-label" for="amount4">₹ 10,000</label>
                                        </div>
                                        <div class="col-4 form-check">
                                            <input type="radio" class="form-check-input amountone" name="amountone"
                                                id="amount5" value="30000" hidden
                                                onclick="removeRequired('customamountonetime','donateTextOneTime','amountone')">
                                            <label class="form-check-label" for="amount5">₹ 30,000</label>
                                        </div>
                                        <div class="col-4 form-check">
                                            <input type="radio" class="form-check-input amountone" name="amountone"
                                                id="amount6" value="50000" hidden
                                                onclick="removeRequired('customamountonetime','donateTextOneTime','amountone')">
                                            <label class="form-check-label" for="amount6">₹ 50,000</label>
                                        </div>
                                        <div class="col-md-12 form-check">
                                            <input type="text" name="customamount" id="customamountonetime"
                                                placeholder="₹ Custom Amount" class="form-control" maxlength="5"
                                                onclick="removeRequiredCustomAmount('customamountonetime','amountone','donateTextOneTime')">
                                        </div>
                                        <div class="col-12 form-check">
                                            <button type="submit" class="btn btn-donate" id="donateTextOneTime">Donate ₹
                                                100.00</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <form action="{{ url('web/donation-payment-monthly') }}" method="post"
                                        id="donationFormMonthly">
                                        @csrf
                                        <div class="row select-months-mobile mb-5 pb-4">
                                            <div class="col-4 form-check">
                                                <input type="radio" class="form-check-input" name="monthcount"
                                                    id="3month" value="3" checked hidden
                                                    onclick="months('donateTextMonth','amountmonth','customamountmonth')">
                                                <label class="form-check-label" for="3month"><span class="numb">3</span>
                                                    Month's</label>
                                            </div>
                                            <div class="col-4 form-check">
                                                <input type="radio" class="form-check-input" name="monthcount"
                                                    id="6month" value="6" hidden
                                                    onclick="months('donateTextMonth','amountmonth','customamountmonth')">
                                                <label class="form-check-label" for="6month"><span class="numb">6</span>
                                                    Month's</label>
                                            </div>
                                            <div class="col-4 form-check">
                                                <input type="radio" class="form-check-input" name="monthcount"
                                                    id="12month" value="12" hidden
                                                    onclick="months('donateTextMonth','amountmonth','customamountmonth')">
                                                <label class="form-check-label" for="12month"><span
                                                        class="numb">12</span>
                                                    Month's</label>
                                            </div>
                                        </div>
                                        <div class="row custom-dontaion-check-mobile">
                                            <div class="form-check col-4">
                                                <input type="hidden" name="purpose" value="Donation">
                                                <input class="form-check-input amountmonth" type="radio"
                                                    name="amountmonth" id="check1" value="100" checked hidden
                                                    onclick="removeRequired('customamountmonth','donateTextMonth','amountmonth')">
                                                <label class="form-check-label" for="check1">
                                                    ₹ 100
                                                </label>
                                            </div>
                                            <div class="form-check col-4">
                                                <input class="form-check-input amountmonth" type="radio"
                                                    name="amountmonth" id="check2" value="500" hidden
                                                    onclick="removeRequired('customamountmonth','donateTextMonth','amountmonth')">
                                                <label class="form-check-label" for="check2">₹ 500 </label>
                                            </div>
                                            <div class="form-check col-4">
                                                <input class="form-check-input amountmonth" type="radio"
                                                    name="amountmonth" id="check3" value="1000" hidden
                                                    onclick="removeRequired('customamountmonth','donateTextMonth','amountmonth')">
                                                <label class="form-check-label" for="check3">₹ 1000</label>
                                            </div>
                                            <div class="form-check col-4">
                                                <input class="form-check-input amountmonth" type="radio"
                                                    name="amountmonth" id="check4" value="10000" hidden
                                                    onclick="removeRequired('customamountmonth','donateTextMonth','amountmonth')">
                                                <label class="form-check-label" for="check4">₹ 10,000</label>
                                            </div>
                                            <div class="form-check col-4">
                                                <input class="form-check-input amountmonth" type="radio"
                                                    name="amountmonth" id="check5" value="30000" hidden
                                                    onclick="removeRequired('customamountmonth','donateTextMonth','amountmonth')">
                                                <label class="form-check-label" for="check5">₹ 30,000</label>
                                            </div>
                                            <div class="form-check col-4">
                                                <input class="form-check-input amountmonth" type="radio"
                                                    name="amountmonth" id="check6" value="50000" hidden
                                                    onclick="removeRequired('customamountmonth','donateTextMonth','amountmonth')">
                                                <label class="form-check-label" for="check6">₹ 50,000</label>
                                            </div>
                                            <div class="col-md-12 form-check">
                                                <input type="text" name="customamountmonth" id="customamountmonth"
                                                    placeholder="₹ Custom Amount" class="form-control" maxlength="5"
                                                    onclick="removeRequiredCustomAmount('customamountmonth','amountmonth','donateTextMonth')">
                                            </div>
                                            <div class="col-12 form-check">
                                                <button type="submit" class="btn btn-donate" id="donateTextMonth">Donate
                                                    ₹
                                                    300.00</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonials py-6">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pe-5">
                <h3>Our Testimonial</h3>
                <h5 class="py-3 pe-5 text-justify">Lorem Ipsum is simply <br> dummy text of the printing <br> and
                    typesetting industry.</h5>
                <p>Lorem Ipsum has been the industry's standard dummy text <br> ever since the 1500s, when an unknown
                    printer took.</p>
                <div class="py-3">
                    <img src="{{ asset('assets/web/image/campaigns/slider-1.png') }}" alt="">
                    <img src="{{ asset('assets/web/image/campaigns/slider-2.png') }}" alt="">
                    <img src="{{ asset('assets/web/image/campaigns/slider-3.png') }}" alt="">
                </div>
                <h6>30+<span>Donors Reviews</span></h6>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center">
                    <div class="card testimonial-card">
                        <div class="px-5 py-5">
                            <span>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a gallery of type and scrambled it to make a type specimen
                                book.</span>
                            <div class="d-flex pt-5">
                                <div><img src="{{ asset('assets/web/image/campaigns/slider-1.png') }}" width="50"
                                        class="rounded-circle">
                                </div>
                                <div class="ml-2">
                                    <h6 class="ps-3"><strong>Johnny Andro</strong></h6>
                                    <h6 class="text-muted ps-3">Director, Company</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="donation-activity py-6">
    <div class="container">
        <h4 class="pb-5">Related Campaigns</h4>
        <div class="row">
            @if(isset($campRand))
            @foreach ($campRand as $list)
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
        </div>
</section>
@endsection