<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Distributorship India</title>
      <meta charset="utf-8">
      
<link rel="icon" href="images/favicon.png" sizes="32x32" type="image/png">

<meta name="google-site-verification" content="9qTDxsf3ZeLV5TuYD_zzbDjfBBE8LzN41x8wuDX-zpU" />

<meta name="keywords" content="distributors, franchises, sales agent, distributorship opportunities, franchise opportunities, business opportunities">

<meta name="description" content="DistributorshipIndia.com is a platform provides opportunities to find Distributors, Sales Agent and Franchisee">
<meta name="author" content="Distributorship India">

<meta content="width=device-width,initial-scale=1" name="viewport">
    

<!-----whatsappp---------- -->

<!-- MS, fb & Whatsapp -->
<meta name="msapplication-TileColor" content="#dce1e5" />
<meta name="theme-color" content="#dce1e5" />
<!-- fb & Whatsapp -->
<meta property="og:title" content="DistributorShip India" />
<meta property="og:site_name" content="DistributorShip India">
<meta property="og:description" content="DistributorshipIndia.com is a platform provides opportunities to find Distributors, Sales Agent and Franchisee" />

<!-- Image to display -->
<meta property="og:image" content="{{ asset('assets/images/logo/logo.png') }}" />


<!-- No need to change anything here -->
<meta property="og:type" content="website" />
<meta property="og:image:type" content="image/jpeg">
<!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">

<!-- Website to visit when clicked in fb or WhatsApp-->
<meta property="og:url" content="https://distributorshipindia.com">

<!-----whatsappp---------- -->

<script type="application/ld+json">
 {
"@context": "http://schema.org/",
"@type": "ImageObject",
 "url": "ImgURLhere",
    "height": 300,
    "width": 300

 }
 </script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-4.4.1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
   <script src='https://www.google.com/recaptcha/api.js'></script> 



  </head>
  <body>
    <span itemprop="image" itemscope itemtype="http://schema.org/ImageObject"> 
 <link itemprop="url" href="imgurlHere">
 <meta itemprop="width" content="300">
 <meta itemprop="height" content="300">
</span>
    
    <header style="height:96px;">
      
      
    </nav>
    <!-- Header -->
     

  <div class="header" id="topheader" >

<nav class="navbar navbar-expand-lg navbar-dark fixed-top"  >


 <div class="container"> <a class="navbar-brand" href="index.php">
<img src="{{ asset('assets/admin/images/logo/logo.png') }}" style = "width: 170px; height: auto;" alt="">  </a>


   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
   <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto">
       
       @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                              <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hi {{ Auth::user()->name }}
                              </a> 
                            </li> 
                            <li class="nav-item">
                              <a class="nav-link" href="{{ url('dashboard') }}">
                                        {{ __('Dashboard') }}
                                    </a> 
                            </li> 
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                            
                        @endguest

<li class="nav-item text-white"><a class="nav-link" href="#"><i class="fa fa-phone fa-rotate-90 blink"></i> +91-99905 39502</a></li> 



 
 
     </ul>
  

     
   </div>
 </div>
</nav>
</div>
  </header>

    @yield('content')

    <footer   class="page-footer font-small mdb-color pt-4 " >

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
    <h6 class=" mb-4 font-weight-bold">Distributorship India</h6>
 <p>
          <a href="index.php">About us</a>
        </p>
         <p>
          <a href="registration.php">Register Free</a>
        </p>
          <p>
          <a href="request-callback.php">Request A callback</a>
        </p>
             <p>
   <a href="user_login.php">Sign In</a>
        </p>
        
        
      

      
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

           <!-- Grid column -->
      <div class="col-md-5 col-lg-5 col-xl-5 mx-auto mt-3">
        <h6 class="mb-4 font-weight-bold">Useful links</h6>
      
            <p>
          <a href="registration.php">Register for Distributor</a>
        </p>
            <p>
          <a href="registration.php">Register for Franchisee</a>
        </p>

          <p>
          <a href="registration.php">Register for Sales Agent</a>
        </p>
      



        <!-- <p>
          <a href="become-member.php">Become a member</a>
        </p> -->
       
   
        
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="mb-4 font-weight-bold">Contact Us</h6>
        <!-- <p>
          <i class="fa fa-home mr-3"></i></p> -->
        <p>
          <i class="fa fa-envelope mr-3"></i>info@distributorshipindia.com</p>
        <p>
          <i class="fa fa-phone fa-rotate-90 mr-3"></i>+91-99905 39502</p>
        <!-- <p>
          <i class="fa fa-print mr-3"></i></p> -->
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center "  >

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">
          <a href="https://distributorshipindia.com/">
            <strong>distributorshipindia.com</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0 text-black">

        <!-- Social buttons -->
        <div class="text-center text-md-right ">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->

<footer class="py-2 px-2 footercopyright ">


  <div class="container">
  
    <p class="m-0 text-center text-white">Copyright &copy; <a class="text-white" href="https://distributorshipindia.com/">
            distributorshipindia.com @php echo date('Y'); @endphp | Developed & managed by <a style="color:#FFF;" href="https://efbtechnology.com" target="_blank">EFB Technology
          </a></p>
  </div>
  <!-- /.container --> 

</footer>


<!------ Include the above in your HEAD tag ---------->


    <style>
    .error {
        color: red;
    }
    </style>

    <script src="{{ asset('assets/web/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/wow.js') }}"></script>
    <script src="{{ asset('assets/web/js/owl-carousel.js') }}"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/web/js/util.js') }}"></script>
    <script src="{{ asset('assets/web/js/main.js') }}"></script>
    <script src="{{asset('js/validate.js')}}"></script>
    <script src="{{asset('js/validateadditional.js')}}"></script>
    <script src="{{asset('js/validations.js')}}"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  
    <script type="text/javascript">
            tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>


    
    
</body>

</html>