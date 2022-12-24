@extends('layouts.weblayout')
@section('content')
<section class="campaigns-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <h3>Apni Roti</h3>
                <h2>Blog</h2>
            </div>
        </div>
    </div>
</section>

@if(isset($blogs['featuredBlog']))
<section class="media-bg">
    <div class="container pt-5">
        <div class="trending__post">
            <div class="row">
                <div class="col-xl-6 col-md-12 align-self-center">
                    <h5>Trending Post</h5>
                    <h4>{{ $blogs['featuredBlog']->blog_title }}</h4>
                    <p>{{ Str::limit($blogs['featuredBlog']->meta_desc, 100) }}</p>
                    <p>{{Carbon\Carbon::parse($blogs['featuredBlog']->created_at)->format('d F Y')}}</p>
                </div>
                <div class="col-xl-6 col-md-12">
                    <img src="{{ asset($blogs['featuredBlog']->blog_image) }}" alt="" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<section class="blog-post pt-6 pb-6">
    <div class="container">
        <h2 class="mb-5 text-center">All Posts</h2>
        <div class="row">
            @if(isset($blogs['blogs']))
            @foreach($blogs['blogs'] as $list)
            <div class="col-md-4 col-sm-6 col-6">
                <div class="blog__card mb-5">
                    @if(file_exists(public_path($list->blog_image)))
                    <img src="{{ asset($list->blog_image) }}" alt="" class="img-fluid w-100 mb-2">
                    @else
                    <img src="{{asset('assets/admin/images/noimg.jpg')}}" alt="img" class="img-fluid w-100 mb-2">
                    @endif
                    <div class="blog-content">
                        <span>{{Carbon\Carbon::parse($list->created_at)->format('d F Y')}}</span>
                        <h5 class="py-2"><a href="{{ url('web/blog-detail/'.$list->blog_slug) }}">{{ $list->blog_title }}</a></h5>
                        <p>{{ Str::limit($list->meta_desc, 100) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            <div class="col-md-12 d-flex justify-content-between media_list-pagination">
                Showing {{count($blogs['blogs'])}} records of total {{ $blogs['blogs']->total() }}
                {{ $blogs['blogs']->links('vendor.pagination.pagination') }}
            </div>
        </div>
    </div>
</section>
</section>
@endsection