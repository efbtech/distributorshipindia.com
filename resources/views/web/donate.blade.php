@extends('layouts.weblayout')
@section('content')
<section class="donate_top_banner py-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="donate_banner text-center">
                <h3>Make Your Own Day of charity</h3>
                <p>Lorem Ipsum passages, and more recently with desktop publishing software</br> like Aldus PageMaker
                    including versions of Lorem Ipsum.</p>
            </div>
            <div class="row charity text-center mt-5">
                <div class="col-4">
                    <img class="img-fluid active" src="{{ asset('assets/web/\image\home\celeb.png') }}">
                    <h4>Celebration</h4>
                </div>
                <div class="col-4">
                    <img class="img-fluid" src="{{ asset('assets/web/\image\home\honor.png') }}">
                    <h4>In honour of</h4>
                </div>
                <div class="col-4">
                    <img class="img-fluid" src="{{ asset('assets/web/\image\home\memory.png') }}">
                    <h4>In memory of</h4>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="donate_form">
        <div class="container">
            <div class="row donate_border">
                <h3 class="text-center donte_heading">Donation Amount</h3>
                <div class="col-12 form-check">
                    <ul class="nav nav-tabs donation_tabs border-0 pb-5 justify-content-center" id="myTab"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">One-Time</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Monthly</button>
                        </li>
                    </ul>
                </div>
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <form class="row custom-dontaion-check" action="{{ url('web/donation-payment') }}"
                                method="post" id="donationForm">
                                @csrf
                                <div class="col-4 form-check">
                                    <input type="hidden" name="purpose" value="Donation">
                                    <input type="radio" class="form-check-input amountone" name="amountone" id="amount1"
                                        value="100" checked hidden
                                        onclick="removeRequired('customamountonetime','donateTextOneTime','amountone')">
                                    <label class="form-check-label" for="amount1">₹ 100</label>
                                </div>
                                <div class="col-4 form-check">
                                    <input type="radio" class="form-check-input amountone" name="amountone" id="amount2"
                                        value="500" hidden
                                        onclick="removeRequired('customamountonetime','donateTextOneTime','amountone')">
                                    <label class="form-check-label" for="amount2">₹ 500</label>
                                </div>
                                <div class="col-4 form-check">
                                    <input type="radio" class="form-check-input amountone" name="amountone" id="amount3"
                                        value="1000" hidden
                                        onclick="removeRequired('customamountonetime','donateTextOneTime','amountone')">
                                    <label class="form-check-label" for="amount3">₹ 1000</label>
                                </div>
                                <div class="col-4 form-check">
                                    <input type="radio" class="form-check-input amountone" name="amountone" id="amount4"
                                        value="10000" hidden
                                        onclick="removeRequired('customamountonetime','donateTextOneTime','amountone')">
                                    <label class="form-check-label" for="amount4">₹ 10,000</label>
                                </div>
                                <div class="col-4 form-check">
                                    <input type="radio" class="form-check-input amountone" name="amountone" id="amount5"
                                        value="30000" hidden
                                        onclick="removeRequired('customamountonetime','donateTextOneTime','amountone')">
                                    <label class="form-check-label" for="amount5">₹ 30,000</label>
                                </div>
                                <div class="col-4 form-check">
                                    <input type="radio" class="form-check-input amountone" name="amountone" id="amount6"
                                        value="50000" hidden
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
                            <form action="{{ url('web/donation-payment-monthly') }}" method="post" id="donationFormMonthly">
                                @csrf
                                <div class="row select-months mb-5 pb-4">
                                    <div class="col-4 form-check">
                                        <input type="radio" class="form-check-input" name="monthcount" id="3month"
                                            value="3" checked hidden
                                            onclick="months('donateTextMonth','amountmonth','customamountmonth')">
                                        <label class="form-check-label" for="3month"><span class="numb">3</span>
                                            Month's</label>
                                    </div>
                                    <div class="col-4 form-check">
                                        <input type="radio" class="form-check-input" name="monthcount" id="6month"
                                            value="6" hidden
                                            onclick="months('donateTextMonth','amountmonth','customamountmonth')">
                                        <label class="form-check-label" for="6month"><span class="numb">6</span>
                                            Month's</label>
                                    </div>
                                    <div class="col-4 form-check">
                                        <input type="radio" class="form-check-input" name="monthcount" id="12month"
                                            value="12" hidden
                                            onclick="months('donateTextMonth','amountmonth','customamountmonth')">
                                        <label class="form-check-label" for="12month"><span class="numb">12</span>
                                            Month's</label>
                                    </div>
                                </div>
                                <div class="row custom-dontaion-check">
                                    <div class="form-check col-4">
                                        <input type="hidden" name="purpose" value="Donation">
                                        <input class="form-check-input amountmonth" type="radio" name="amountmonth"
                                            id="check1" value="100" checked hidden
                                            onclick="removeRequired('customamountmonth','donateTextMonth','amountmonth')">
                                        <label class="form-check-label" for="check1">
                                            ₹ 100
                                        </label>
                                    </div>
                                    <div class="form-check col-4">
                                        <input class="form-check-input amountmonth" type="radio" name="amountmonth"
                                            id="check2" value="500" hidden
                                            onclick="removeRequired('customamountmonth','donateTextMonth','amountmonth')">
                                        <label class="form-check-label" for="check2">₹ 500 </label>
                                    </div>
                                    <div class="form-check col-4">
                                        <input class="form-check-input amountmonth" type="radio" name="amountmonth"
                                            id="check3" value="1000" hidden
                                            onclick="removeRequired('customamountmonth','donateTextMonth','amountmonth')">
                                        <label class="form-check-label" for="check3">₹ 1000</label>
                                    </div>
                                    <div class="form-check col-4">
                                        <input class="form-check-input amountmonth" type="radio" name="amountmonth"
                                            id="check4" value="10000" hidden
                                            onclick="removeRequired('customamountmonth','donateTextMonth','amountmonth')">
                                        <label class="form-check-label" for="check4">₹ 10,000</label>
                                    </div>
                                    <div class="form-check col-4">
                                        <input class="form-check-input amountmonth" type="radio" name="amountmonth"
                                            id="check5" value="30000" hidden
                                            onclick="removeRequired('customamountmonth','donateTextMonth','amountmonth')">
                                        <label class="form-check-label" for="check5">₹ 30,000</label>
                                    </div>
                                    <div class="form-check col-4">
                                        <input class="form-check-input amountmonth" type="radio" name="amountmonth"
                                            id="check6" value="50000" hidden
                                            onclick="removeRequired('customamountmonth','donateTextMonth','amountmonth')">
                                        <label class="form-check-label" for="check6">₹ 50,000</label>
                                    </div>
                                    <div class="col-md-12 form-check">
                                        <input type="text" name="customamountmonth" id="customamountmonth"
                                            placeholder="₹ Custom Amount" class="form-control" maxlength="5"
                                            onclick="removeRequiredCustomAmount('customamountmonth','amountmonth','donateTextMonth')">
                                    </div>
                                    <div class="col-12 form-check">
                                        <button type="submit" class="btn btn-donate" id="donateTextMonth">Donate ₹
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
</section>


<section class="py-6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="help_left">
                    <h5>How <span class="">ApniRoti</span> is Helping </br>
                        India Fight hunger?</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                        the
                        leap into electronic typesetting, remaining essentially unchanged.</p>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since unchanged. </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="help_right">
                    <img class="img-fluid" src="{{ asset('assets/web/\image\home\truck.png') }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection