@include('layouts.header')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title">
                            <h4 class="mb-0 font-size-18">{{ isset($blogEdit) ? 'Edit' : 'Add' }} blog</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Blog</a></li>
                                <li class="breadcrumb-item active"><a href="{{ url('admin/blog-list') }}">Blog list</a>
                                </li>
                                <li class="breadcrumb-item active">{{ isset($blogEdit) ? 'Edit' : 'Add' }} blog</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content-wrapper">
                <div class="card">
                    <form action="{{ url('admin/blog-store') }}" method="post" id="blogForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input class="form-control" type="text" placeholder="Blog Title"
                                            name="blog_title" id="blog_title"
                                            value="{{ isset($blogEdit) ? $blogEdit->blog_title : old('blog_title') }}">
                                        <input type="hidden" name="edit_blog" id="edit_blog"
                                            value="{{ isset($blogEdit) ? $blogEdit->id : '' }}">
                                        <p class="text-danger mt-1">@error('blog_title'){{ $message }}@enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Scheduled Date</label>
                                        <input class="form-control" type="date" name="scheduled_date" id="scheduled_date" min="{{ isset($blogEdit) ? $blogEdit->scheduled_date : date('Y-m-d') }}"
                                            value="{{ isset($blogEdit) ? $blogEdit->scheduled_date : old('scheduled_date') }}">
                                        <p class="text-danger mt-1">@error('scheduled_date'){{ $message }}@enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Description</label>
                                        <input class="form-control" type="text" placeholder="Meta Description"
                                            name="meta_desc" id="meta_desc"
                                            value="{{ isset($blogEdit) ? $blogEdit->meta_desc : old('meta_desc') }}">
                                        <p class="text-danger mt-1">@error('meta_desc'){{ $message }}@enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="blog_description" id="blog_description"
                                            cols="30" rows="20">
                                            {{ isset($blogEdit) ? $blogEdit->blog_description : old('blog_description') }}
                                        </textarea>
                                        <p class="text-danger mt-1" id="blogwarn">@error('blog_description'){{ $message }}@enderror</p>
                                        <div id="editor-error"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Image</label>
                                        <input class="form-control" type="file" name="blog_image" id="blog_image"
                                            accept="image/*"
                                            onchange="preview_image(event,'blog_image_output_image','blog_image_remove_img','blog_image_preview_container')">
                                        <p class="text-danger mt-1">@error('blog_image'){{ $message }}@enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Image Preview</label>
                                        <div class="global__preview-img" id="blog_image_preview_container"
                                            style="display: {{ isset($blogEdit) ? 'block' : 'none' }};">
                                            @if(isset($blogEdit) && file_exists(public_path($blogEdit->blog_image)))
                                            <img class="img-fluid" id="blog_image_output_image"
                                                src="{{ isset($blogEdit) ? asset($blogEdit->blog_image) : asset('') }}"
                                                alt="img" width="100">
                                            @else
                                            <img class="img-fluid" id="blog_image_output_image"
                                                src="{{ isset($blogEdit) ? asset('assets/admin/images/noimg.jpg') : asset('') }}"
                                                alt="img" width="100">
                                            @endif
                                            <span class="delete_preview" style="display:none;"
                                                id="blog_image_remove_img"
                                                onclick="removePre('blog_image_remove_img','blog_image_output_image','blog_image_preview_container','blog_image');">
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @if(isset($blogEdit))
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Mark Feature
                                        </label>
                                        <input class="form-check-input" type="checkbox" name="is_featured" id="flexCheckChecked" @if($blogEdit->is_featured == '1') checked disabled @endif>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-danger waves-effect waves-light me-2" onclick="checkEditorError('editor-error')">Submit</button>
                            <a href="{{ url('admin/blog-list') }}" class="btn btn-warning waves-effect waves-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
tinymce.init({
    selector: 'textarea#blog_description',
    plugins: 'image code autolink lists media table fullscreen insertdatetime wordcount',
    toolbar: 'undo redo link image code insertdatetime a11ycheck addcomment showcomments casechange checklist export formatpainter editimage pageembed permanentpen table tableofcontents fullscreen print wordcount toc',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Anand Kumar',
    branding: false,
    relative_urls: false,
    remove_script_host: false,
    convert_urls: true,
    image_title: true,
    content_css: 'default',
    automatic_uploads: true,
    file_picker_types: 'image',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});
</script>
@include('layouts.footer')
@include('admin.scripts.blogscript')