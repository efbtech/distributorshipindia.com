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
            <li class="nav-item profiletab col-lg-3 col-md-3 col-sm-3 col-12 ">
              <a class="profiletab-link profiletab "  id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" >Franchisees Search</a>
            </li>
            <li class="nav-item contacttab col-lg-3 col-md-3 col-sm-3 col-12">
              <a class="contacttab-link contacttab " id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" >Sales Agents Search</a>
            </li>
          </ul>


          <div class="tab-content h-100 tab-brk" id="myTabContent">

            <!-- ***********Distributors Search*********** -->
            <div class="tab-pane fade show active hometab pt-4 pb-4" id="home" role="tabpanel" aria-labelledby="home-tab">

            @include('web.tabs.db_search',['cats'=>$blogRand['cats']])
            <!-- ***********End Distributors Search*********** -->


<!-- ***********Franchisess Search*********** -->
            <div class="tab-pane fade show profiletab pt-4 pb-4" id="profile" role="tabpanel"   aria-labelledby="profile-tab">
            @include('web.tabs.franchise_search_filter', ['cats'=>$blogRand['cats']])

              <?php //include('franchise_search_filter.php'); ?>
            

              
            </div>
<!-- ***********End Franchisess Search*********** -->



      <!-- ***********Sales Agent Search*********** -->
          <div class="tab-pane fade show contacttab pt-4 pb-4" id="contact" role="tabpanel"  aria-labelledby="contact-tab">
            @include('web.tabs.salesagent_search_filter', ['cats'=>$blogRand['cats']])
            </div>
            <!-- ***********End Sales Agent Search*********** -->

          </div>
        </div>
      </div>
    </div>
    
    
  </header>
  <!-- **********search-end-form*********** -->

  <!-- Advertisement banner -->
  <div class="container" >
    <div class="row">
      <div class="col-12 col-lg-12 col-md-12 mt-5 " >
        <img src="https://distributorshipindia.com/images/banner_ad.jpg" class="img-fluid" alt="">
      </div>
    </div>
  </div>
  <!-- Advertisement banner -->
  <div class="container sec-box">
    <!-- Distributorship div -->
    <section class="mt-1 mb-3">
      <h5 class="sec_headline">Distributorship & Business Opportunities</h5>
      <div class="row">
        @foreach($distributors as $distributor)
        <div class="col-sm-3">
          @include('web.listing.listing_card',['logo'=>$distributor->logo, 'name'=>$distributor->name, 'anualsale_start'=>$distributor->anualsale_start, 'anualsale_end'=>$distributor->anualsale_end, 'anualsale_unit'=>$distributor->anualsale_unit,'slugroot'=>'distributor', 'slug'=>$distributor->slug])
        </div>
        @endforeach
      </div>
    </section>
     
  </div>

<div class="container" >
    <div class="row">
      <div class="col-12 col-lg-12 col-md-12" >
        <img src="https://distributorshipindia.com/images/banner_ad.jpg" class="img-fluid" alt="">
      </div>
    </div>
  </div>

  <div class="container sec-box">
    <!-- Distributorship div -->
    <section class="mt-1 mb-3">
      <h5 class="sec_headline">Frenchises Opportunities</h5>
      <div class="row">
        @foreach($franchise as $fr)
        <div class="col-sm-3">
          @include('web.listing.listing_card',['logo'=>$fr->logo, 'name'=>$fr->name, 'anualsale_start'=>$distributor->anualsale_start, 'anualsale_end'=>$distributor->anualsale_end, 'anualsale_unit'=>$fr->anualsale_unit,'slugroot'=>'franchise', 'slug'=>$fr->slug])
        </div>
        @endforeach
      </div>
    </section>
     
  </div>

<div class="container" >
    <div class="row">
      <div class="col-12 col-lg-12 col-md-12 " >
        <img src="https://distributorshipindia.com/images/banner_ad.jpg" class="img-fluid" alt="">
      </div>
    </div>
  </div>

  <div class="container sec-box">
    <!-- Distributorship div -->
    <section class="mt-1 mb-3">
      <h5 class="sec_headline">Sales Agents Opportunities</h5>
      <div class="row">
        @foreach($salesagent as $sa)
        <div class="col-sm-3">
          @include('web.listing.listing_card_agent',['name'=>$sa->name, 'slugroot'=>'salesagent', 'slug'=>$sa->slug])
        </div>
        @endforeach
      </div>
    </section>
     
  </div>

<!-- Free Advice - Ask Our Experts -->
    <?php //include('contact_us.php')  ?>
<!-- Free Advice - Ask Our Experts -->
    
    
    <!-- testimonials -->
    
    <hr>
    <!-- footer -->
    
@endsection
