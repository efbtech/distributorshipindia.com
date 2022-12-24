@include('layouts.header')
@php
$search = '';
if(isset($_GET['search'])){
$search = $_GET['search'];
}
@endphp
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title">
                            <h4 class="mb-0 font-size-18">Blog list</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Blog</a></li>
                                <li class="breadcrumb-item active">Blog list</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-between mb-2 align-items-baseline text-end">
                                            <a href="{{ url('admin/add-blog') }}"
                                                class="btn btn-danger waves-effect waves-light me-2 mb-3">Add Blog</a>
                                            <form action="" class="d-flex justify-content-end">
                                                <div class="input-group col-md-12 media-search-input">
                                                    <input type="text"
                                                        class="form-control waves-effect waves-light me-2 mb-3"
                                                        placeholder="Search" name="search" value="{{$search}}">
                                                    <button
                                                        class="btn btn-danger waves-effect waves-light me-2 mb-3 mr-0"
                                                        type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @if(isset($blogs))
                                    @if(count($blogs) == 0)
                                    <div class="col-md-12">
                                        <div class="card mb-12">
                                            <div class="card-body">
                                                <h1>No Records Found!!</h1>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    @foreach($blogs as $list)
                                    <div class="col-md-3">
                                        <div class="card blog-card mb-4 position-relative">
                                        <span class="text-warning fs-1 position-absolute top-0 end-0 pe-2">@if($list->is_featured == '1')
                                             <i class="fa-solid fa-award"></i>
                                        @endif</span>
                                            @if(file_exists(public_path($list->blog_image)))
                                            <img src="{{ asset($list->blog_image) }}" class="card-img-top img-fluid card-image"
                                                alt="Card image cap">
                                            @else
                                            <img src="{{asset('assets/admin/images/noimg.jpg')}}" alt="img"
                                                class="card-img-top img-fluid card-image">
                                            @endif
                                            
                                            <div class="card-body">
                                                <h4 class="card-title"><a
                                                        href="{{ url('admin/edit-blog/'.$list->id) }}">{{ $list->blog_title }}</a>
                                                </h4>
                                                
                                                <p class="card-text">{{ Str::limit($list->meta_desc, 99) }}</p>
                                                <p class="card-text text-muted">
                                                    {{Carbon\Carbon::parse($list->created_at)->format('d F Y')}}</p>
                                                <a href="{{ url('admin/edit-blog/'.$list->id) }}">
                                                    <i class="fa-solid fa-pen-to-square text-danger fs-5" title="Edit"></i></a>
                                                <a href="javascript:void(0)" onclick="blogDetail('{{$list->id}}','{{URL::to('admin/blog-detail')}}')">
                                                    <i class="fa-sharp fa-solid fa-eye text-danger fs-5 mx-1" title="Detail"></i></a>
                                                @if($list->is_featured != '1')
                                                    <a href="javascript:void(0);" onclick="deleteme('{{$list->id}}','{{URL::to('admin/deleteblog')}}','blog')">
                                                    <i class="fa-solid fa-rectangle-xmark text-danger fs-5 mx-1" title="Delete"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                    @endif
                                    <div class="col-md-12 d-flex justify-content-between media_list-pagination">
                                        Showing {{count($blogs)}} records of total {{ $blogs->total() }}
                                        {{ $blogs->links('vendor.pagination.pagination') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@include('admin.scripts.blogscript')