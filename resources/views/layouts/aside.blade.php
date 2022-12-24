<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div class="user-details">
            <div class="d-flex">
                <div class="me-2">
                    <img src="{{ asset('assets/admin/images/users/avatar-4.jpg') }}" alt="" class="avatar-md rounded-circle">
                </div>
                <div class="user-info w-100">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Donald Johnson
                            <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)" class="dropdown-item"><i
                                        class="mdi mdi-account-circle text-muted me-2"></i>
                                    Profile<div class="ripple-wrapper me-2"></div>
                                </a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i
                                        class="mdi mdi-cog text-muted me-2"></i>
                                    Settings</a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i
                                        class="mdi mdi-lock-open-outline text-muted me-2"></i>
                                    Lock screen</a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i
                                        class="mdi mdi-power text-muted me-2"></i>
                                    Logout</a></li>
                        </ul>
                    </div>

                    <p class="text-white-50 m-0">Administrator</p>
                </div>
            </div>
        </div>


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{ url('admin') }}" class="waves-effect">
                        <i class="mdi mdi-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/categories') }}" class="waves-effect">
                        <i class="mdi mdi-home"></i>
                        <span>Categories</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                        <span>Users</span>
                    </a>
                    <!--<ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('admin/donation-list') }}">Donation List</a></li>
                    </ul>-->
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('admin/users-list') }}">Users List</a></li>
                    </ul>
                </li>
                <!--<li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                        <span>Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('admin/donation-list') }}">Main Category</a></li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('admin/categories') }}">Sub Category</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                        <span>Donation</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('admin/donation-list') }}">Donation List</a></li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('admin/subscription-list') }}">Subscription List</a></li>
                    </ul>
                </li>
                <li class="@if(Request::segment(2) == 'add-blog') mm-active @endif">
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-sharp fa-solid fa-photo-film"></i>
                        <span>Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('admin/blog-list') }}">Blog list</a></li>
                    </ul>
                </li>
                <li class="@if(Request::segment(2) == 'media-photo-list' || Request::segment(2) == 'media-video-list') mm-active @endif">
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-sharp fa-solid fa-image"></i>
                        <span>Media</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="@if(Request::segment(2) == 'media-photo-list') mm-active @endif">
                            <a href="{{ url('admin/media-photo-list') }}">Photo</a>
                        </li>
                        <li class="@if(Request::segment(2) == 'media-video-list') mm-active @endif">
                            <a href="{{ url('admin/media-video-list') }}">Video</a>
                        </li>
                        <li class="@if(Request::segment(2) == 'media-video-list') mm-active @endif">
                            <a href="{{ url('admin/media-news-list') }}">News</a>
                        </li>
                    </ul>
                </li>
                <li class="@if(Request::segment(2) == 'queries-list')@endif">
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-solid fa-clipboard-question"></i>
                        <span>Queries</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('admin/queries-list') }}">Queries list</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span>CMS</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('admin/terms-conditions') }}">Terms & Conditions</a></li>
                        <li><a href="{{ url('admin/privacy-policy') }}">Privacy Policy</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-regular fa-credit-card"></i>
                        <span>Invoice</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="payment-list.php">Invoice list</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-solid fa-volume-high"></i>
                        <span>Campaigns</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('admin/campaigns-list') }}">Campaigns List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-solid fa-hand"></i>
                        <span>Volunteer</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('admin/volunteer-list') }}">Volunteer List</a></li>
                    </ul>
                </li> -->
                <!-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-solid fa-thumbs-up"></i>
                        <span>Subscription</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('admin/subscription-list') }}">Subscription List</a></li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>
</div>