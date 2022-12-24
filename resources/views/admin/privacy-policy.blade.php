@include('layouts.header')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title">
                            <h4 class="mb-0 font-size-18">Privacy policy</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="privacy-policy.php">CMS</a></li>
                                <li class="breadcrumb-item active">Privacy policy</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- Start page content-wrapper -->
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form action="{{ url('admin/privacy-policy-store') }}" method="post"
                                enctype="multipart/form-data" id="privacy-policy-form">
                                @csrf
                                <div class="card-body">
                                    <label class="mb-1">Privacy Policy</label>
                                    <textarea class="form-control" rows="39" placeholder="Privacy Policy" name="privacy-policy" id="privacy-policy">
                                        @if(isset($privacyPolicy)) {{ $privacyPolicy->content }} @endif</textarea>
                                    <input type="hidden" name="type" value="privacy-policy">
                                    <div id="editor-error"></div>
                                    <div class="text-end mt-3">
                                        <button type="submit" class="btn btn-danger waves-effect waves-light me-2"
                                            onclick="checkEditorError('editor-error')">Submit</button>
                                        <button type="button"
                                            class="btn btn-warning waves-effect waves-light">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')

<script>
tinymce.init({
    selector: 'textarea#privacy-policy',
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

function checkEditorError(id) {
    var editorContent = tinyMCE.get('privacy-policy').getContent();
    if (editorContent == '') {
        $('#' + id).html('Content is required.');
        $('#' + id).css("color", "red");
    }
    tinymce.get('privacy-policy').on('keyup', function(e) {
        var editorContent = tinyMCE.get('privacy-policy').getContent();
        if (editorContent == '') {
            $('#' + id).html('Content is required.');
            $('#' + id).css("color", "red");
        } else {
            $('#' + id).html('');
        }
    });
}
$(document).ready(function() {
    $("#privacy-policy-form").submit(function(e) {
        var editorContent = tinyMCE.get('privacy-policy').getContent().replace(/<[^>]*>/g, '').replace('&nbsp;', ' ').length;
        if (editorContent < 1 ) {
            e.preventDefault();
        }
    });
});
</script>

@if(session()->has('privacyPolicy'))
<script>
$(function() {
    $('#success').modal('show')
    modelClose('success')
});
</script>
@endif