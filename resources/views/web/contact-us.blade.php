@extends('layouts.weblayout')
@section('content')
<section class="campaigns-title mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>
</section>
<section class="message py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center pb-md-5">
                <h4>Send us a message</h4>
                <p class="pb-5">Lorem Ipsum passages, and more recently with desktop publishing software <br> like Aldus
                    PageMaker including versions of Lorem Ipsum.</p>
            </div>
            
            
            
        </div>
    </div>
</section>
<section class="get__in__touch pb-6 mb-6">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center pb-sm-5">
                <h4>Get in touch</h4>
                <p>Lorem Ipsum passages, and more recently with desktop publishing software <br> like Aldus PageMaker
                    including versions of Lorem Ipsum.</p>
            </div>
        </div>
        <div class="get__in__touch__form">
            <form action="{{ url('web/contact-us-form') }}" method="post" id="contact-us-form">
                @csrf
                <div class="row">
                    <div class="col-sm-6 col-md-6 pb-4">
                        <input type="text" name="fname" id="fname" placeholder="First Name" value="{{ old('fname') }}">
                        <input type="hidden" name="type" value="contactus">
                        <p class="error" id="fnameerr"></p>
                    </div>
                    <div class="col-sm-6 col-md-6 pb-4">
                        <input type="text" name="lname" id="lname" placeholder="Last Name" value="{{ old('lname') }}">
                        <p class="error" id="lnameerr"></p>
                    </div>
                    <div class="col-sm-6 col-md-6 pb-4">
                        <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                        <p class="error" id="emailerr"></p>
                    </div>
                    <div class="col-sm-6 xcol-md-6 pb-4">
                        <input type="text" name="phone" id="phone" placeholder="Phone" maxlength="10"
                            value="{{ old('phone') }}">
                        <p class="error" id="phoneerr"></p>
                    </div>
                    <div class="col-md-12 pb-4">
                        <select class="form-control m-0"  name="subject" id="subject" value="{{ old('subject') }}">
                            <option value="" disabled selected>Subject</option>
                            <option value="Test One">Test One</option>
                            <option value="Test Two">Test Two</option>                          
                        </select>
                        <p class="error" id="subjecterr"></p>
                    </div>
                    <div class="col-md-12 pb-4">
                        <textarea name="message" id="message" cols="60" rows="6"
                            placeholder="Message">{{ old('message') }}</textarea>
                        <p class="error" id="messageerr"></p>
                    </div>
                    <div class="col-md-12 text-start">
                        <p class="text-success" id="successmsg"></p>
                    </div>
                    <div class="col-md-12 text-end">
                        <button class="btn btn-red" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<div class="modal fade" id="conf_modal" tabindex="-1" aria-labelledby="Join Us" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="border__">
                    <div class="row">
                        <div class="col-md-12 text-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <h2>Submitted</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection