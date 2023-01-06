@extends('layouts.weblayout')
@section('content')
<!-- **********search-form*********** -->
<header class="header-bg">
    <div class="container">
      <div class="row align-items-center mt-4">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h5 class="display- text-white mt-5 mb-2 mtitle">Search for Business Opportunities</h5>
          <p class="lead text-white-50"></p>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item hometab col-lg-3 col-md-3 col-sm-3 col-12 active ">
              <a class="hometab-link hometab " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" >
              Distributors Search</a>
            </li>
            
          </ul>


          <div class="tab-content h-100 tab-brk" id="myTabContent">

            <!-- ***********Distributors Search*********** -->
            <div class="tab-pane fade show active hometab pt-4 pb-4" id="home" role="tabpanel" aria-labelledby="home-tab">

            @include('web.tabs.db_search',['cats'=>$blogRand['cats']])
            <!-- ***********End Distributors Search*********** -->




          </div>
        </div>
      </div>
    </div>
    
    
  </header>
<div class="container sec-box">
    <div class="row">
        <div class="container mb-1">
            <div class="row"></div>
        </div>
        <div class="container mb-1">
                <div class="row">
                  <div class="col-md-3 col-lg-2 col-sm-2  border-right-0 ">
                    <img src="{{ url($listing->logo) }}" class="img-thumbnail">
                  </div>
                  <div class="col-md-6 col-sm-6 col-12   border-right-0">
                    <h5 class="mt-4 text-uppercase fscolor">
                    {{ $listing->name }}</h5>
                    <!--<h6>Sri Mahalaxmi Industries, Post Office Road, Hethur, Sakleshpur</h6>-->
                  </div>
                  <div class="col-md-4 col-sm-4 col-12"></div>
                </div>
                <hr>
                <!-- Company Details -->
                
                <div class="row py-2 px-2"></div>
                <div class="row">
                  <div class="col-md-12 rounded-0 bg-light py-4 px-3">
                    <div class="row">
                      <div class="col-md-4">
                        <label class="border bscolor bg-white rounded-0 form-control h-75 py-2 px-2 "><span class="fscolor">Mode:</span><br>
                        <h6>@if($listing->mode == 'appoint') Appoint for Distributors @else Become Distributor @endif</h6>
                      </label>
                    </div>
                    <div class="col-md-4">
                      <label class="border  bg-white rounded-0 form-control h-75 py-2 px-2 bscolor"><span class="fscolor">GST Number:</span> <br>
                      <h6>{{ $listing->gst }}</h6>
                      <!-- // multibyte strings
                      $result = mb_substr($myStr, 0, 5); -->
                    </label>
                  </div>
                  <div class="col-md-4">
                    <label class="border bscolor bg-white rounded-0 form-control h-75 py-2 px-2"><span class="fscolor">PAN Number:</span> <br>
                    <h6>{{ $listing->pan }}</h6>
                  </label>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-4">
                  <label class="border bscolor bg-white rounded-0 form-control h-75 py-2 px-2"><span class="fscolor">Brand:</span> <br>
                  <h6>{{ $listing->brand }}</h6>
                </label>
                
              </div>
              <div class="col-md-4">
                <label class="border bscolor bg-white rounded-0 form-control h-75 py-2 px-2"><span class="fscolor">Space Required:</span> <br>
                <h6>{{ $listing->space }}</h6>
              </label>
            </div>
            <div class="col-md-4">
              <label class="border bscolor bg-white rounded-0 form-control h-75 py-2 px-2"><span class="fscolor">Investment:</span><br>
              <h6>Rs. {{ $listing->anualsale_start }}{{ $listing->anualsale_unit }} - Rs. {{ $listing->anualsale_end }}{{ $listing->anualsale_unit }}</h6>
            </label>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4">
            <label class="border bscolor bg-white rounded-0 form-control h-75 py-2 px-2"><span class="fscolor">Established:</span> <br>
            <h6>{{ $listing->establishment }}</h6>
          </label>
        </div>
        <div class="col-md-4">
          <label class="border bscolor bg-white rounded-0 form-control h-75 py-2 px-2"><span class="fscolor">Annual Sale:</span> <br>
          <h6>Rs. {{ $listing->anualsale_start }} - Rs. {{ $listing->anualsale_end }} {{ $listing->anualsale_unit }}</h6>

        </label>
      </div>
    </div>
  </div>
</div>
</div>
    </div>
</div>


<div class="container mb-1 sec-box">
<div class="row h-100">
<div class="col-lg-9 col-md-12 col-12 ">
<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border border-top-0  border-bottom-0 border-width:medium;">
  
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-light border-top">
      <h5 class="mt-2"><strong>Business Details</strong></h5>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-top border-bottom">
      <label class="mt-2">{{ $listing->about }}</label>
    </div>
  </div>
</section>
<br>
<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border border-top-0  border-bottom-0 border-width:medium;">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-top bg-light">
      <h5 class="mt-2"><strong>Products for Distribution</strong></h5>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-top border-bottom">
      <label class="mt-2">{{ $listing->products }}</label>
    </div>
    
  </div>
</section>
<br>
<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border border-top-0  border-bottom-0 border-width:medium;">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-top bg-light">
      <h5 class="mt-2"><strong>Business Category</strong></h5>
    </div>
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-top border-bottom">
      <label class="mt-2">{{ $listCat }}</label>
    </div>
    
  </div>
</section>
<br>
<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border border-top-0  border-bottom-0 border-width:medium;">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-top bg-light">
      <h5 class="mt-2"><strong>Investment Details</strong></h5>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 border-top">
      <label class="mt-2">Space Required</label>
    </div>
    <div class="col-lg-8 col-md-6 col-sm-6 col-6 border-top border-left">
      <label class="mt-2">{{ $listing->space }}</label>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-6  border-top border-bottom ">
      <label class="mt-3">Investment Required</label>
    </div>
    
    <div class="col-lg-8 col-md-6 col-sm-6 col-6  border-top border-left border-bottom">
      <label class="mt-2">Rs. {{ $listing->anualsale_start }}{{ $listing->anualsale_unit }} - Rs. {{ $listing->anualsale_end }}{{ $listing->anualsale_unit }}</label>
    </div>
  </div>
</section>
<br>
<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border border-top-0  border-bottom-0 border-width:medium;">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-top bg-light">
    <h5 class="mt-2"><strong>Distributorship Level</strong></h5></div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-top border-bottom">
      <label class="mt-2">
                                , Region Level, ,      </label>
    </div>
  </div>
</section>
<br>
<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border border-top-0  border-bottom-0 border-width:medium;">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-top bg-light">
    <h5 class="mt-2"><strong>Preferred Location</strong></h5></div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
          </div>
  </div>
  <div class="row border-top">
    
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 border-right">
      <strong><label class="mt-2">North</label></strong>
      
    </div>
    <div class="col-lg-8 col-md-6 col-sm-6 col-6">
      <label class="mt-2">
        Jammu and Kashmir, Uttarakhand, Delhi, Uttar Pradesh, Punjab, Haryana        
      </label>
    </div>
  </div>
  <div class="row border-top">
    
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 border-right">
      <strong><label class="mt-2">South</label></strong>
      
    </div>
    <div class="col-lg-8 col-md-6 col-sm-6 col-6">
      <label class="mt-2">
        </label>
    </div>
  </div>
  <div class="row border-top">
    
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 border-right">
      <strong><label class="mt-3">East</label></strong>
    </div>
    <div class="col-lg-8 col-md-6 col-sm-6 col-6">
      <label class="mt-2">
        </label>
    </div>
  </div>
  <div class="row border-top">
    
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 border-right">
      <strong><label class="mt-2">West</label></strong>
      
    </div>
    <div class="col-lg-8 col-md-6 col-sm-6 col-6">
      <label class="mt-2">
        </label>
    </div>
  </div>
  <div class="row border-top">
    
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 border-right">
      <strong><label class="mt-2">Central</label></strong>
      
    </div>
    <div class="col-lg-8 col-md-6 col-sm-6 col-6">
      <label class="mt-2">
        </label>
    </div>
  </div>
  <div class="row border-top">
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 border-right">
      <strong><label class="mt-2">Union Territories</label></strong>
    </div>
    <div class="col-lg-8 col-md-6 col-sm-6 col-6">
      <label class="mt-2">
              </label>
    </div>
  </div>
  <div class="row border-top border-bottom">
    
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 border-right">
      <strong><label class="mt-2">World Wide</label></strong>
    </div>
    <div class="col-lg-8 col-md-6 col-sm-6 col-6">
      <label class="mt-2">
        </label>
    </div>
  </div>
</section>
<br>
<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border border-top-0  border-bottom-0 border-width:medium;">
  <div class="row mt-1">
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-top bg-light ">
    <h5 class="mt-2"><strong>Contact Details</strong></h5> </div>
  </div>
  <div class="row border-top">
    
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 border-right">
      <strong><label class="mt-2">Name</label></strong>
    </div>
    <div class="col-lg-8 col-md-6 col-sm-6 col-6">
      <label class="mt-2">{{ auth()->user()->name }}</label>
      
    </div>
  </div>
  <div class="row  border-top ">
    <div class="col-lg-4 col-md-6 col-sm-6 col-6 border-right">
      <strong><label class="mt-2">Company Name</label></strong>
      
    </div>
    <div class="col-lg-8 col-md-6 col-sm-6 col-6">
      <label class="mt-2">--</label></div>
    </div>
    <div class="row  border-top">
      <div class="col-lg-4 col-md-6 col-sm-6 col-6 border-right">
        <strong><label class="mt-2">Address</label></strong>
      </div>
      <div class="col-lg-8 col-md-6 col-sm-6 col-6">
        <label class="mt-2">{{ $listing->address }}</label></div>
      </div>
      <div class="row border-top">
        <div class="col-lg-4 col-md-6 col-sm-6 col-6 border-right">
          <strong><label class="mt-2">City</label></strong>
        </div>
        <div class="col-lg-8 col-md-6 col-sm-6 col-6">
          <label class="mt-2">{{ $listing->city }}, {{ $listing->state }}</label></div>
        </div>
        <div class="row border-top">
          <div class="col-lg-4 col-md-6 col-sm-6 col-6 border-right">
            <strong><label class="mt-2">Zip Code</label></strong>
            
          </div>
          <div class="col-lg-8 col-md-6 col-sm-6 col-6">
            <label class="mt-2">{{ $listing->zip }}</label>
          </div>
        </div>
        <div class="row border-top border-bottom ">
          <div class="col-lg-4 col-md-6 col-sm-6 col-6 border-right">
            <strong><label class="mt-2">Mobile</label></strong>
          </div>
          <div class="col-lg-8 col-md-6 col-sm-6 col-6">
            <label class="mt-2">
            XXXXXXXXXX</label></div>
          </div>
                    
                    <!-- </div> -->
        </section>
      </div>
      <!-- right vertical add image  -->
            <div class="col-lg-3 col-md-3">
        <div class="col-lg-12 col-md-12 h-50 ">
          <img src="{{ url('assets/uploads/ads/right-ad-img1.jpg') }}" class="img-fluid img-thumbnail ad-right-banner1 w-100 h-100  py-1 px-1" alt="">
        </div>
        <div class="col-lg-12 col-md-12 h-50">
          <img src="{{ url('assets/uploads/ads/right-ad-img1.jpg') }}" class="img-fluid img-thumbnail  ad-right-banner2 w-100 py-1 px-1" alt="">
        </div>
      </div>
            <!-- right vertical add image  -->
    </div>
  </div>
  <!-- **********search-end-form*********** -->

  <!-- Advertisement banner -->
  <div class="container" >
    <div class="row">
      <div class="col-12 col-lg-12 col-md-12 mt-5 " >
        <img src="{{ url('assets/uploads/ads/banner_ad.jpg') }}" class="img-fluid" alt="">
      </div>
    </div>
  </div>
  

@endsection
