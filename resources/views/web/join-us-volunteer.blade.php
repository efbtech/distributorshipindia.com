@extends('layouts.weblayout')
@section('content')
<section class="volunteer_top_banner">
    <div class="container">
        <div class="row">
            <div class="volunteer_banner text-center">
                <h3 class="nothing-you-could-do">Apni Roti</h3>
                <h2 class="pt-serif">Volunteer</h2>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class=" help_tgther col-md-6 pt-6 align-self-center">
                <h5 class="nothing-you-could-do">Where it all began</h5>
                <h3 class="pt-serif">Let’s help together</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been
                    the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                    the
                    leap into electronic typesetting, remaining essentially unchanged. </p>
            </div>
            <div class="col-md-6 pt-6">
                <img src="{{ asset('assets/web/\image\home\volunteer1.png') }}">
            </div>
        </div>
    </div>
</section>

<section class="how_it_works py-6 my-6">
    <div class="container">
        <div class="row">
            <h3>How it works</h3>
            <h6>Lorem Ipsum is simply dummy text of the printing</h6>
            <div class="col-md-6 pt-5">
                <h2 class="inter">01</h2>
                <h5 class="inter">Create a personal profile</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever when an unknown printer.</p>
            </div>
            <div class="col-md-6 pt-5">
                <h2 class="inter">02</h2>
                <h5 class="inter">Add your organization</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever when an unknown printer.</p>
            </div>
            <div class="col-md-6 pt-5">
                <h2 class="inter">03</h2>
                <h5 class="inter">Add volunteer opportunities</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever when an unknown printer.</p>
            </div>
            <div class="col-md-6 pt-5">
                <h2 class="inter">04</h2>
                <h5 class="inter">You are ready to recruit!</h5>
                <a href=""><button class="btn text-white mt-3">Get Start</button></a>

            </div>

        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/web/\image\home\volunteer1.png') }}">
            </div>
            <div class=" help_tgther col-md-6 pt-6 align-self-center">
                <h3 class="pt-serif">More People, More impact</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been
                    the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                    the
                    leap into electronic typesetting, remaining essentially unchanged. </p>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="members_benefits mt-6">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-5 pb-1">
                <div class="volunteer_pointers">
                    <h6 class="nothing-you-could-do fw-light">WHAT YOU WILL GET</h6>
                    <h4 class="pt-serif fw-normal">Member Benefit</h4>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem
                        Ipsum
                        has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to
                        make
                        a type specimen book. It has survived not only five centuries, but also the leap into
                        electronic.
                    </p>
                    <ul class="pointers ps-3 list-unstyled">
                        <li>Lorem ipsum dolor sit amet consectetur.</li>
                        <li>Lorem ipsum dolor sit amet consectetur.</li>
                        <li>Lorem ipsum dolor sit.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-6 pb-6">
    <div class="container">
        <div class="volunteer_sec row">             
            <div class="col-md-4 px-lg-5 pt-5 pb-3  volunteer_form">                
                    <h4 class="inter text-normal">Interest</br> to get involved?</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and industry.</p>
                    <ul class="list-unstyled">
                        <li class="phone pt-3"> <img src="{{ asset('assets/web/\image\icon\phone.svg') }}">
                            <div class="d-block"><a href="tel:+91 9876543210">+91 9876543210</a><br><a
                                    href="tel:+91  9878764343">+919878764343</a></div>
                        </li>
                        <li class="mail">
                            <img src="{{ asset('assets/web/\image\icon\mail.svg') }}">
                            <div class="phone_icons py-4">
                                <a href="mailto:apniroti32@gmail.com">apniroti32@gmail.com</a>
                                <br>
                                <a href="mailto:support32@apniroti.com">support32@apniroti.com</a>
                            </div>
                        </li>
                        <li class="add">
                            <img src="{{ asset('assets/web/\image\icon\phone.svg') }}">
                            <p>B-07, Royal Building,B Block, Sector 63,
                                Noida, Uttar Pradesh 201301</p>
                        </li>
                    </ul>                 
            </div>
            <div class="col-md-8 px-lg-5 pt-5 pb-3  volunteer_form2">
                <form action="{{ url('web/contact-us-form') }}" method="post" id="contact-us-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <input type="text" class="form-control m-0" id="fname" name="fname"
                                placeholder="First Name">
                            <input type="hidden" name="type" value="volunteer">
                        </div>
                        <div class="col-md-6 mb-4">
                            <input type="text" class="form-control m-0" id="lname" name="lname" placeholder="Last Name">
                        </div>
                        <div class="col-md-6 mb-4">
                            <input type="text" class="form-control m-0" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="col-md-6 mb-4">
                            <input type="text" class="form-control m-0" id="phone" name="phone" placeholder="Phone">
                        </div>
                        <div class="col-md-12  mb-4">
                        <select class="form-control m-0"  name="subject" id="subject" placeholder="Subject" >
                            <option value="" disabled selected>Subject</option>
                            <option value="Test One">Test One</option>
                            <option value="Test Two">Test Two</option>                          
                        </select>                      
                    </div>
                        <div class="col-md-12 mb-4">
                            <textarea class="form-control m-0" name="message" id="message" cols="92" rows="3"
                              placeholder="Message"></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn text-white">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
 
@endsection