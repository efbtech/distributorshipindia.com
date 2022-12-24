@extends('layouts.weblayout')
@section('content')
<section class="campaigns-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <h3>Apni Roti</h3>
                <h2>About Us</h2>
            </div>
        </div>
    </div>
</section>
<section class="who-we-are pt-6">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 smile">
                <img src="{{ asset('assets/web/image/about-us/smile.png') }}" alt="" class="img-fluid w-100">
            </div>
            <div class="col-md-4">
                <div class="mb-md-5 mb-lg-5">
                    <h3>Where it all began</h3>
                    <h2 class="py-2">Who We Are?</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised with
                        desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p class="pt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley type specimen book.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="roti-img pt-5">
                    <img src="{{ asset('assets/web/image/about-us/truck-roti.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="faq pb-6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Our Mission
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Our Goal
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Our Vission
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="founder mb-6 py-6">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-end">
                <img src="{{ asset('assets/web/image/about-us/bikash-aggarwal.png') }}" alt="" class="img-fluid mb-2">
            </div>
            <div class="col-md-6 ps-md-5">
                <h3>Where it all began</h3>
                <h2 class="py-2">About-Us</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries,</p>
                <p class="pt-4"> but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>
</section>
<section class="social-media py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-lg-6 col-md-12 ps-md-5">
                <h6>Bikash Agarwal</h6>
                <p>Founder, Apniroti</p>
                <div class="social-icon text-center gap-4 pb-5">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="video py-6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('assets/web/image/about-us/video.png') }}" alt="" class="img-fluid w-100 mb-2">
            </div>
        </div>
    </div>
</section>
<section class="history">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Where it all began</h3>
                <h2 class="py-2">History About Us</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries,</p>
                <p class="pt-4"> but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/web/image/about-us/history-img.png') }}" alt="" class="img-fluid w-100 pt-5">
            </div>
        </div>
    </div>
</section>
<section class="team py-6">
    <div class="container">
        <div class="row text-center">
            <h2>Team Member</h2>
            <div class="col-lg-4 col-md-6 col-sm-6 col-6 pe-md-5">
                <div class="team-card">
                    <img src="{{ asset('assets/web/image/about-us/akash-mishra.png') }}" alt="" class="img-fluid w-100">
                    <div class="card__content">
                        <h5>Akash Mishra</h5>
                        <span>(Volunteer)</span>
                        <div class="social-icon gap-4">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-6 pe-md-5">
                <div class="team-card">
                    <img src="{{ asset('assets/web/image/about-us/vikas-sharma.png') }}" alt="" class="img-fluid w-100">
                    <div class="card__content">
                        <h5>Vikash Sharma</h5>
                        <span>(Volunteer)</span>
                        <div class="social-icon gap-4">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-6 pe-md-5">
                <div class="team-card">
                    <img src="{{ asset('assets/web/image/about-us/ankush-kumar.png') }}" alt="" class="img-fluid w-100">
                    <div class="card__content">
                        <h5>Ankush Kumar</h5>
                        <span>(Volunteer)</span>
                        <div class="social-icon gap-4">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-6 pe-md-5">
                <div class="team-card">
                    <img src="{{ asset('assets/web/image/about-us/virender-sharma.png') }}" alt="" class="img-fluid w-100">
                    <div class="card__content">
                        <h5>Virender Sharma</h5>
                        <span>(Volunteer)</span>
                        <div class="social-icon gap-4">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-6 pe-md-5">
                <div class="team-card">
                    <img src="{{ asset('assets/web/image/about-us/suraj-kumar.png') }}" alt="" class="img-fluid w-100">
                    <div class="card__content">
                        <h5>Suraj kumar</h5>
                        <span>(Volunteer)</span>
                        <div class="social-icon gap-4">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-6 pe-md-5">
                <div class="team-card">
                    <img src="{{ asset('assets/web/image/about-us/suman-sharma.png') }}" alt="" class="img-fluid w-100">
                    <div class="card__content">
                        <h5>Suman Sharma</h5>
                        <span>(Volunteer)</span>
                        <div class="social-icon gap-4">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="protection mb-6">
    <div class="overlay"></div>
    <div class="container-fluid px-6">
        <div class="row">
            <div class="col-md-12">
                <div class="volunteer text-center">
                    <h1>Join our mission of Childhood <br> Protection Program</h1>
                    <span>Join as a Volunteer</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection