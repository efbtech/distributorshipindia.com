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
                            <h4 class="mb-0 font-size-18">News</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Media</a></li>
                                <li class="breadcrumb-item active">News</li>
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
                                            <a href="{{ url('admin/add-news') }}"
                                                class="btn btn-danger waves-effect waves-light me-2 mb-3">Add News</a>
                                            <form action="" class="d-flex justify-content-end">
                                                <div class="input-group col-md-12 media-search-input">
                                                    <input type="text"
                                                        class="form-control waves-effect waves-light me-2 mb-3"
                                                        placeholder="Search" name="search" value=" ">
                                                    <button
                                                        class="btn btn-danger waves-effect waves-light me-2 mb-3 mr-0"
                                                        type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @if(isset($news))
                                    @if(count($news) == 0)
                                    <div class="col-md-12">
                                        <div class="card mb-12">
                                            <div class="card-body">
                                                <h1>No Records Found!!</h1>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    @foreach($news as $list)
                                    <div class="col-md-3">
                                        <div class="card blog-card mb-4">
                                            @if(file_exists(public_path($list->media_path)))
                                            <img src="{{ asset($list->media_path) }}"
                                                class="card-img-top img-fluid card-image" alt="Card image cap">
                                            @else
                                            <img src="{{asset('assets/admin/images/noimg.jpg')}}"
                                                class="card-img-top img-fluid card-image" alt="Card image cap">
                                            @endif
                                            <div class="card-body">
                                                <h4 class="card-title"><a href="#">{{ $list->media_name }}</a></h4>
                                                <p class="card-text">{{ Str::limit($list->media_meta_desc, 99) }}</p>
                                                <p class="card-text text-muted">
                                                    {{Carbon\Carbon::parse($list->created_at)->format('d F Y')}}</p>
                                                <a href="{{ url('admin/edit-news/'.$list->id) }}">
                                                    <i class="fa-solid fa-pen-to-square text-danger fs-5"
                                                        title="Edit"></i></a>
                                                <a href="">
                                                    <i class="fa-sharp fa-solid fa-eye text-danger fs-5 mx-1"
                                                        title="Edit"></i></a>
                                                <a href="javascript:void(0);">
                                                    <i class="fa-solid fa-rectangle-xmark text-danger fs-5 mx-1"
                                                        title="Delete"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                    @endif
                                    <div class="col-md-12 d-flex justify-content-between media_list-pagination">
                                        Showing {{count($news)}} records of total {{ $news->total() }}
                                        {{ $news->links('vendor.pagination.pagination') }}
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
@include('admin.scripts.mediascript')