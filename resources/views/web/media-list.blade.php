@php
$photosTab = '';
$videosTab = '';
$newsTab = '';
if(isset($_GET['mediaphotostab'])){
$photosTab = $_GET['mediaphotostab'];
}
if(isset($_GET['mediavideostab'])){
$videosTab = $_GET['mediavideostab'];
}
if(isset($_GET['medianewstab'])){
$newsTab = $_GET['medianewstab'];
}
@endphp
@extends('layouts.weblayout')
@section('content')
<section class="campaigns-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <h3>Apni Roti</h3>
                <h2>Gallery</h2>
            </div>
        </div>
    </div>
</section>
<section class="media-bg py-6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab mb-4">
                    <button class="tablinks @if($photosTab == '' && $videosTab == '' && $newsTab == '' ) active @endif @if($photosTab != ''  ) active @endif" onclick="openCity(event, 'photos')">Photo</button>
                    <button class="tablinks @if($videosTab !='' ) active @endif" onclick="openCity(event, 'video')">Video</button>
                    <button class="tablinks @if($newsTab !='' ) active @endif" onclick="openCity(event, 'news')">News</button>
                </div>
            </div>

            <div id="photos" class="tabcontent" style="@if($photosTab == '' && $videosTab == '' && $newsTab == '' ) display:block; @else display:none; @endif @if($photosTab != ''  ) display:block; @endif">
                <div class="row">
                    @if(isset($media['photos']))
                    @foreach($media['photos'] as $list)
                    <div class="col-md-4 col-sm-6 col-6">
                        @if(file_exists(public_path($list->media_path)))
                        <img src="{{ asset($list->media_path) }}" alt="" class="w-100 mt-4">
                        @else
                        <img src="{{asset('assets/admin/images/noimg.jpg')}}" alt="" class="w-100 mt-4">
                        @endif
                    </div>
                    @endforeach
                    @endif
                    <div class="col-md-12 text-center pt-5">
                        Showing {{count($media['photos'])}} records of total {{ $media['photos']->total() }}
                        {{ $media['photos']->appends(['medianews' => $media['news']->currentPage(), 'mediavideos' => $media['videos']->currentPage(), 'mediaphotos' => 'mediaphotospage', 'mediaphotostab' => 'active'])->links('vendor.pagination.pagination') }}
                    </div>
                </div>
            </div>

            <div id="video" class="tabcontent" style="@if($videosTab !='' ) display:block; @else display:none; @endif">
                <div class="row">
                    @if(isset($media['videos']))
                    @foreach($media['videos'] as $list)
                    <div class="col-md-4 col-sm-6 col-6">
                    <video width="320" height="240" class="w-100 mt-4" controls poster="@if(file_exists(public_path($list->media_thumb))) {{ asset($list->media_thumb) }} @else {{asset('assets/admin/images/noimg.jpg')}} @endif">
                        <source src="{{ asset($list->media_path) }}" type="video/mp4">
                    </video>
                    </div>
                    @endforeach
                    @endif
                    <div class="col-md-12 text-center pt-5">
                        Showing {{count($media['videos'])}} records of total {{ $media['videos']->total() }}
                        {{ $media['videos']->appends(['mediaphotos' => $media['photos']->currentPage(), 'medianews' => $media['news']->currentPage(), 'mediavideos' => 'mediavideospage', 'mediavideostab' => 'active'])->links('vendor.pagination.pagination') }}
                    </div>
                </div>
            </div>

            <div id="news" class="tabcontent" style="@if($newsTab !='' ) display:block; @else display:none; @endif">
                <div class="row">
                @if(isset($media['news']))
                    @foreach($media['news'] as $list)
                    <div class="col-md-4 col-sm-6 col-6">
                        <img src="{{ asset('assets/web/image/gallery/gallery-1.png') }}" alt="" class="w-100 mt-4">
                    </div>
                    @endforeach
                    @endif
                    <div class="col-md-12 text-center pt-5">
                        Showing {{count($media['news'])}} records of total {{ $media['news']->total() }}
                        {{ $media['news']->appends(['mediaphotos' => $media['photos']->currentPage(), 'mediavideos' => $media['videos']->currentPage(), 'medianews' => 'medianewspage', 'medianewstab' => 'active'])->links('vendor.pagination.pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="video-gallery py-6 mb-6">
    <div class="container">
        <div class="row video">
            <img src="{{ asset('assets/web/image/gallery/video-img.png') }}" alt="">
        </div>
    </div>
</section>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
@endsection