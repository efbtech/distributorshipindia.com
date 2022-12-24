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
                            <h4 class="mb-0 font-size-18">Video</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="media-video.php">Media</a></li>
                                <li class="breadcrumb-item active">Video</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content-wrapper">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-between mb-2 align-items-baseline text-end">
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#videoUpload"
                                        class="btn btn-danger waves-effect waves-light me-2 mb-3" onclick="resetForm('mediaVideoUploadForm','media_edit_video','media_path_vid_preview_container','media_thumb_preview_container')">Upload</a>
                                    <form action="" class="d-flex justify-content-end">
                                        <div class="input-group col-md-12 media-search-input">
                                            <input type="text" class="form-control waves-effect waves-light me-2 mb-3"
                                                placeholder="Search" name="search" value="{{$search}}">
                                            <button class="btn btn-danger waves-effect waves-light me-2 mb-3 mr-0"
                                                type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            @if(isset($media))
                            @if(count($media) == 0)
                            <div class="col-md-12">
                                <div class="card mb-12">
                                    <div class="card-body">
                                        <h1>No Records Found!!</h1>
                                    </div>
                                </div>
                            </div>
                            @else
                            @foreach($media as $list)
                            <div class="col-md-2">
                                <div class="card">
                                    @if(file_exists(public_path($list->media_thumb)))
                                    <img class="rounded shadow small_card-image" alt="200x200" width="100%"
                                        src="{{ asset($list->media_thumb) }}" data-holder-rendered="true">
                                    @else
                                    <img src="{{asset('assets/admin/images/noimg.jpg')}}" alt="200x200" width="100%"
                                        class="rounded shadow small_card-image" data-holder-rendered="true">
                                    @endif
                                    <div class="p-3">
                                        <h4 class="fw-normal py-1">{{ $list->media_name }}</h4>
                                        <a href="javascript:void(0);"
                                            onclick="singleRecord('{{$list->id}}','{{URL::to('admin/single-media')}}','edit','video')">
                                            <i class="fa-solid fa-pen-to-square text-danger fs-5"></i>
                                        </a>

                                        <a href="javascript:void(0);"
                                            onclick="singleRecord('{{$list->id}}','{{URL::to('admin/single-media')}}','detail','video')">
                                            <i class="fa-sharp fa-solid fa-eye text-danger fs-5 mx-1"></i></a>
                                        <a href="javascript:void(0);"><i
                                                class="fa-solid fa-rectangle-xmark text-danger fs-5"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                            @endif
                            <div class="col-md-12 d-flex justify-content-between media_list-pagination">
                                Showing {{count($media)}} records of total {{ $media->total() }}
                                {{ $media->links('vendor.pagination.pagination') }}
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