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
                    {{ $listing->name }}                    </h5>
                    <h6>Sri Mahalaxmi Industries, Post Office Road, Hethur, Sakleshpur</h6>
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
                        <h6>Appoint for Distributors</h6>
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
                  <h6>Unnathi</h6>
                </label>
                
              </div>
              <div class="col-md-4">
                <label class="border bscolor bg-white rounded-0 form-control h-75 py-2 px-2"><span class="fscolor">Space Required:</span> <br>
                <h6>200</h6>
              </label>
            </div>
            <div class="col-md-4">
              <label class="border bscolor bg-white rounded-0 form-control h-75 py-2 px-2"><span class="fscolor">Investment:</span><br>
              <h6>Rs. 2 Lac. - Rs. 5 Lac.</h6>
            </label>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4">
            <label class="border bscolor bg-white rounded-0 form-control h-75 py-2 px-2"><span class="fscolor">Established:</span> <br>
            <h6>2011</h6>
          </label>
        </div>
        <div class="col-md-4">
          <label class="border bscolor bg-white rounded-0 form-control h-75 py-2 px-2"><span class="fscolor">Annual Sale:</span> <br>
          <h6>Rs. 1 - Rs. 2 Cr</h6>

        </label>
      </div>
    </div>
  </div>
</div>
</div>
    </div>
</div>

  <!-- **********search-end-form*********** -->

  <!-- Advertisement banner -->
  <div class="container" >
    <div class="row">
      <div class="col-12 col-lg-12 col-md-12 mt-5 " >
        <img src="https://distributorshipindia.com/images/banner_ad.jpg" class="img-fluid" alt="">
      </div>
    </div>
  </div>
  

@endsection
