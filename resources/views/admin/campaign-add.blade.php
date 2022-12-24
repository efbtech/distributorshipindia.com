@include('layouts.header')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title">
                            <h4 class="mb-0 font-size-18">Add Campaign</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Campaings</a></li>
                                <li class="breadcrumb-item active"><a href="{{ url('admin/campaigns-list') }}">Campaings
                                        List</a></li>
                                <li class="breadcrumb-item active"><a
                                        href="javascript:void(0)">{{ isset($campDetail) ? 'Edit' : 'Add' }} Campaing</a>
                                </li>
                                <li class="breadcrumb-item active"> </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content-wrapper">
                <div class="card">
                    <form action="{{ url('admin/campaign-store') }}" method="post" id="campaignForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input class="form-control" type="text" placeholder="Campaign Title"
                                            name="campaigns_title" id="campaigns_title"
                                            value="{{ isset($campDetail) ? $campDetail->campaigns_title : old('campaigns_title') }}">
                                        <input type="hidden" name="edit_campaign" id="edit_campaign"
                                            value="{{ isset($campDetail) ? $campDetail->id : old('edit_campaign') }}">
                                        <p class="text-danger mt-1">@error('campaigns_title'){{ $message }}@enderror</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Campaign Orgainser</label>
                                        <input class="form-control" type="text" name="campaigns_orgainsed_by"
                                            placeholder="Campaign Orgainser" id="campaigns_orgainsed_by"
                                            value="{{ isset($campDetail) ? $campDetail->campaigns_orgainsed_by : old('campaigns_orgainsed_by') }}">
                                        <p class="text-danger mt-1">
                                            @error('campaigns_orgainsed_by'){{ $message }}@enderror</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Feat Image</label>
                                        <input class="form-control" type="file" name="campaigns_feat_img"
                                            id="campaigns_feat_img" accept="image/*"
                                            onchange="preview_image(event,'campaigns_feat_img_output_image','campaigns_feat_img_remove_img','campaigns_feat_img_preview_container')">
                                        <p class="text-danger mt-1">@error('campaigns_feat_img'){{ $message }}@enderror
                                        </p>
                                        <div class="global__preview-img" id="campaigns_feat_img_preview_container"
                                            style="display: {{ isset($campDetail) ? 'block' : 'none' }};">
                                            @if(isset($campDetail) &&
                                            file_exists(public_path($campDetail->campaigns_feat_img)))
                                            <img class="img-fluid" id="campaigns_feat_img_output_image"
                                                src="{{ isset($campDetail) ? asset($campDetail->campaigns_feat_img) : asset('') }}"
                                                alt="img" width="100">
                                            @else
                                            <img class="img-fluid" id="campaigns_feat_img_output_image"
                                                src="{{ isset($campDetail) ? asset('assets/admin/images/noimg.jpg') : asset('') }}"
                                                alt="img" width="100">
                                            @endif

                                            <span class="delete_preview" style="display:none;"
                                                id="campaigns_feat_img_remove_img"
                                                onclick="removePre('campaigns_feat_img_remove_img','campaigns_feat_img_output_image','campaigns_feat_img_preview_container','campaigns_feat_img');">
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Detail Image</label>
                                        <input class="form-control" type="file" name="campaigns_detail_img"
                                            id="campaigns_detail_img" accept="image/*"
                                            onchange="preview_image(event,'campaigns_detail_img_output_image','campaigns_detail_img_remove_img','campaigns_detail_img_preview_container')">
                                        <p class="text-danger mt-1">
                                            @error('campaigns_detail_img'){{ $message }}@enderror</p>
                                        <div class="global__preview-img" id="campaigns_detail_img_preview_container"
                                            style="display: {{ isset($campDetail) ? 'block' : 'none' }};">
                                            @if(isset($campDetail) &&
                                            file_exists(public_path($campDetail->campaigns_detail_img)))
                                            <img class="img-fluid" id="campaigns_detail_img_output_image"
                                                src="{{ isset($campDetail) ? asset($campDetail->campaigns_detail_img) : asset('') }}"
                                                alt="img" width="100">
                                            @else
                                            <img class="img-fluid" id="campaigns_detail_img_output_image"
                                                src="{{ isset($campDetail) ? asset('assets/admin/images/noimg.jpg') : asset('') }}"
                                                alt="img" width="100">
                                            @endif
                                            <span class="delete_preview" style="display:none;"
                                                id="campaigns_feat_img_remove_img"
                                                onclick="removePre('campaigns_feat_img_remove_img','campaigns_feat_img_output_image','campaigns_feat_img_preview_container','campaigns_feat_img');">
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Start Date</label>
                                        <input type="date" class="form-control" id="campaigns_start_date"
                                            name="campaigns_start_date"
                                            value="{{ isset($campDetail) ? $campDetail->campaigns_start_date : '' }}" min="{{ isset($campDetail) ? $campDetail->campaigns_start_date : date('Y-m-d') }}">
                                        <p class="text-danger mt-1">
                                            @error('campaigns_start_date'){{ $message }}@enderror</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>End Date</label>
                                        <input type="date" class="form-control" name="campaigns_end_date"
                                            id="campaigns_end_date"
                                            value="{{ isset($campDetail) ? $campDetail->campaigns_end_date : '' }}" min="{{ isset($campDetail) ? $campDetail->campaigns_end_date : date('Y-m-d') }}">
                                        <p class="text-danger mt-1">@error('campaigns_end_date'){{ $message }}@enderror
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Amount</label>
                                        <input class="form-control" type="text" placeholder="Enter Amount"
                                            name="campaigns_amount" id="campaigns_amount"
                                            value="{{ isset($campDetail) ? $campDetail->campaigns_amount : old('campaigns_amount') }}" maxlength="5">
                                        <p class=" text-danger mt-1">@error('campaigns_amount'){{ $message }}@enderror
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Comment</label>
                                        <textarea class="form-control" name="campaigns_comment" id="campaigns_comment"
                                            cols="30" rows="5"
                                            placeholder="Comment">{{ isset($campDetail) ? $campDetail->campaigns_comment : old('campaigns_comment') }}</textarea>
                                        <p class="text-danger mt-1">@error('campaigns_comment'){{ $message }}@enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Description</label>
                                        <textarea class="form-control" name="campaigns_meta_desc"
                                            id="campaigns_meta_desc" cols="30" rows="5"
                                            placeholder="Meta Description">{{ isset($campDetail) ? $campDetail->campaigns_meta_desc : old('campaigns_meta_desc') }}</textarea>
                                        <p class="text-danger mt-1">@error('campaigns_meta_desc'){{ $message }}@enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="campaigns_desc" id="campaigns_desc"
                                            cols="30"
                                            rows="10">{{ isset($campDetail) ? $campDetail->campaigns_desc : old('campaigns_desc') }}</textarea>
                                        <p class="text-danger mt-1">@error('campaigns_desc'){{ $message }}@enderror</p>
                                        <div id="editor-error"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-danger waves-effect waves-light me-2" onclick="checkEditorError('editor-error')">Submit</button>
                            <a href="{{ url('admin/add-campaign') }}"
                                class="btn btn-warning waves-effect waves-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
@include('admin.scripts.campaignsscript')