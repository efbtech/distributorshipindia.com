@extends('layouts.weblayout')
@section('content')
<section class="blog-detail">
    <div class="container pt-5">
        <ul class="breadcrumb">
            <li class="back"><a href="{{ url()->previous() }}"><img src="{{ asset('assets/web/image/campaigns/arrow-back.png') }}" alt="">
                    Back</a></li>
            <li><a href="{{ url('') }}">Home</a></li>
            <li><a href="{{ url('web/blog') }}">Blogs</a></li>
            <li class="active"><a href="#!">{{ $blogDetail['detail']->blog_title }}</a></li>
        </ul>
        <div class="row">
            <div class="col-xl-12 col-md-12">
                @if(file_exists(public_path($blogDetail['detail']->blog_image)))
                <img src="{{ asset($blogDetail['detail']->blog_image) }}" alt="" class="img-fluid w-100 mb-4">
                @else
                <img src="{{asset('assets/admin/images/noimg.jpg')}}" alt="img" class="img-fluid w-100 mb-4">
                @endif
                <span>{{Carbon\Carbon::parse($blogDetail['detail']->created_at)->format('F d Y')}}</span>
                <h4 class="mt-3">{{ $blogDetail['detail']->blog_title }}</h4>
                {!! $blogDetail['detail']->blog_description !!}
            </div>
        </div>
    </div>
    </div>
</section>
<section class="blog-post pt-6 pb-6">
    <div class="container">
        <h2 class="mb-5 text-center">Related Posts</h2>
        <div class="row">
            @if(isset($blogDetail['blogrand']))
            @foreach($blogDetail['blogrand'] as $list)
            <div class="col-md-4 col-sm-6">
                <div class="blog__card mb-5">
                    @if(file_exists(public_path($list->blog_image)))
                    <img src="{{ asset($list->blog_image) }}" alt="" class="img-fluid w-100 mb-2">
                    @else
                    <img src="{{asset('assets/admin/images/noimg.jpg')}}" alt="img" class="img-fluid w-100 mb-2">
                    @endif
                    <span>Akash Mishra l November 8, 2022</span>
                    <h5 class="py-2"><a
                            href="{{ url('web/blog-detail/'.$list->blog_slug) }}">{{ $list->blog_title }}</a></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
                    </p>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
</section>
@endsection