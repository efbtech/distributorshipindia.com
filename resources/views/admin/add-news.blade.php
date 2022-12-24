@include('layouts.header')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title">
                            <h4 class="mb-0 font-size-18">{{ isset($singleNews) ? 'Edit' : 'Add' }} News</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('admin/media-news-list') }}">News</a></li>
                                <li class="breadcrumb-item active"><a
                                        href="{{ url('admin/add-news') }}">{{ isset($singleNews) ? 'Edit' : 'Add' }}
                                        News</a></li>
                                <li class="breadcrumb-item active"> </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content-wrapper">
                <div class="card">
                    <form action="{{ url('admin/submit-news') }}" method="post" id="mediaNewsForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">News Title</label>
                                        <input class="form-control" type="text" placeholder="News Title"
                                            name="media_name" id="media_name"
                                            value="{{ isset($singleNews) ? $singleNews->media_name : old('media_name') }}">
                                        <input type="hidden" name="news_edit" id="news_edit"
                                            value="{{ isset($singleNews) ? $singleNews->id : old('id') }}">
                                        <input type="hidden" name="media_type" id="media_type" value="news">
                                        <p class="text-danger mt-1">@error('media_name'){{ $message }}@enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">News Image</label>
                                        <input class="form-control" type="file" name="media_path" id="media_path"
                                            accept="image/*"
                                            onchange="preview_image(event,'media_path_output_image','media_path_remove_img','media_path_preview_container')">
                                        <p class="text-danger mt-1">@error('media_path'){{ $message }}@enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Image Preview</label>
                                        <div class="global__preview-img" id="media_path_preview_container"
                                            style="display: {{ isset($singleNews) ? 'block' : 'none' }};">
                                            @if(isset($singleNews) && file_exists(public_path($singleNews->media_path)))
                                            <img class="img-fluid" id="media_path_output_image"
                                                src="{{ isset($singleNews) ? asset($singleNews->media_path) : asset('') }}"
                                                alt="img" width="100">
                                            @else
                                            <img class="img-fluid" id="media_path_output_image"
                                                src="{{ isset($singleNews) ? asset('assets/admin/images/noimg.jpg') : asset('') }}"
                                                alt="img" width="100">
                                            @endif
                                            <span class="delete_preview" style="display:none;"
                                                id="media_path_remove_img"
                                                onclick="removePre('media_path_remove_img','media_path_output_image','media_path_preview_container','media_path');">
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">News Meta Description</label>
                                        <textarea class="form-control" name="media_meta_desc" id="media_meta_desc"
                                            cols="30" rows="5"
                                            placeholder="News Meta Description">{{ isset($singleNews) ? $singleNews->media_meta_desc : old('media_meta_desc') }}</textarea>
                                        <p class="text-danger mt-1">@error('media_meta_desc'){{ $message }}@enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">News Description</label>
                                        <textarea class="form-control" name="media_news" id="media_news" cols="30"
                                            rows="25">{{ isset($singleNews) ? $singleNews->media_news : old('media_news') }}
                                        </textarea>
                                        <p class="text-danger mt-1">@error('media_news'){{ $message }}@enderror</p>
                                        <div id="editor-error"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-danger waves-effect waves-light me-2" onclick="checkEditorError('editor-error')">Submit</button>
                            <a href="{{ url('admin/add-news') }}"
                                class="btn btn-warning waves-effect waves-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
tinymce.init({
    selector: 'textarea#media_news',
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

<script>
function checkEditorError(id) {
    var editorContent = tinyMCE.get('media_news').getContent();
    if (editorContent == '') {
        $('#' + id).html('News description is required.');
        $('#' + id).css("color", "red");
    }
    tinymce.get('media_news').on('keyup', function(e) {
        var editorContent = tinyMCE.get('media_news').getContent();
        if (editorContent == '') {
            $('#' + id).html('News description is required.');
            $('#' + id).css("color", "red");
        } else {
            $('#' + id).html('');
        }
    });
}
$(document).ready(function() {
    $("#mediaNewsForm").submit(function(e) {
        var editorContent = tinyMCE.get('media_news').getContent().replace(/<[^>]*>/g, '')
            .replace('&nbsp;', ' ').length;
        if (editorContent < 1) {
            e.preventDefault();
        }
    });
});
</script>
@include('layouts.footer')