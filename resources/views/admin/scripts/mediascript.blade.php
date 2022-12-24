@if(session()->has('savenews'))
<script>
$(function() {
    $('#success').modal('show')
    modelClose('success')
});
</script>
@endif

<!-- photo upload section start -->
<div id="photoUpload" class="modal fade theme__modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Upload</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin/media-photo-upload') }}" method="post" id="mediaPhotoUploadForm"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" name="media_name" id="media_name"
                                    placeholder="Name">
                                <input type="hidden" name="media_type" value="image">
                                <input type="hidden" name="media_edit" id="media_edit_photo">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input class="form-control" name="media_path" id="media_path" type="file"
                                    accept="image/*"
                                    onchange="preview_image(event,'media_path_output_image','media_path_remove_img','media_path_preview_container')">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Image Preview</label>
                                <div class="global__preview-img" id="media_path_preview_container"
                                    style="display: 'none';">
                                    <img class="img-fluid" id="media_path_output_image" src="" alt="img" width="100">
                                    <span class="delete_preview" style="display:none;" id="media_path_remove_img"
                                        onclick="removePre('media_path_remove_img','media_path_output_image','media_path_preview_container','media_path');">
                                        <i class="fa-solid fa-circle-xmark"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-end mt-3">
                        <button type="submit" class="btn btn-danger waves-effect waves-light me-2">Submit</button>
                        <button type="button" class="btn btn-warning waves-effect waves-light"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="photoDetail" class="modal fade theme__modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span id="imgText"></span> Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <img class="img-fluid" id="media_path_output_image_detail" src="" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- photo upload section end -->

<!-- video upload section start -->
<div id="videoUpload" class="modal fade theme__modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Upload</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin/media-video-upload') }}" method="post" id="mediaVideoUploadForm"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" name="media_name" id="media_name_vid"
                                    placeholder="Name">
                                <input type="hidden" name="media_type" value="video">
                                <input type="hidden" name="media_edit" id="media_edit_video">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Video</label>
                                <input class="form-control" name="media_path_vid" id="media_path_vid" type="file"
                                    accept="video/*"
                                    onchange="preview_image(event,'media_path_vid_output_image','media_path_vid_remove_img','media_path_vid_preview_container')">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Video's Thumbnail</label>
                                <input class="form-control" name="media_path" id="media_thumb" type="file"
                                    accept="image/*"
                                    onchange="preview_image(event,'media_thumb_output_image','media_thumb_remove_img','media_thumb_preview_container')">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Video Preview</label>
                                <div class="global__preview-img" id="media_path_vid_preview_container"
                                    style="display: 'none';">
                                    <video width="320" height="240" id="media_path_vid_output_image" controls>
                                        <source src="" type="video/mp4">
                                    </video>
                                    <span class="delete_preview" style="display:none;" id="media_path_vid_remove_img"
                                        onclick="removePre('media_path_vid_remove_img','media_path_vid_output_image','media_path_vid_preview_container','media_path_vid');">
                                        <i class="fa-solid fa-circle-xmark"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Video's Thumbnail Preview</label>
                                <div class="global__preview-img" id="media_thumb_preview_container"
                                    style="display: 'none';">
                                    <img class="img-fluid" id="media_thumb_output_image" src="" alt="img" width="100">
                                    <span class="delete_preview" style="display:none;" id="media_thumb_remove_img"
                                        onclick="removePre('media_thumb_remove_img','media_thumb_output_image','media_thumb_preview_container','media_thumb');">
                                        <i class="fa-solid fa-circle-xmark"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-end mt-3">
                        <button type="submit" class="btn btn-danger waves-effect waves-light me-2">Submit</button>
                        <button type="button" class="btn btn-warning waves-effect waves-light"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- video upload section end -->

<script>
function singleRecord(id, url, action, type) {
    console.log(baseURL)
    $.ajax({
        type: 'post',
        url: url,
        data: {
            'id': id,
            '_token': '{{ csrf_token() }}',
        },
        success: function(result) {
            if (action == 'edit') {
                if (type == 'photo') {
                    $('#media_edit_photo').val(result.id)
                    $('#media_name').val(result.media_name)
                    $('#media_path_preview_container').show()
                    $('#media_path_output_image').attr('src', baseURL + '/' + result.media_path)
                }
                if (type == 'video') {
                    $('#media_edit_video').val(result.id)
                    $('#media_name_vid').val(result.media_name)
                    $('#media_thumb_preview_container').show()
                    $('#media_thumb_output_image').attr('src', baseURL + '/' + result.media_thumb)
                    $('#media_path_vid_output_image').attr('src', baseURL + '/' + result.media_path)
                }
                $('#' + type + 'Upload').modal('show')
            }
            if (action == 'detail') {
                if (type == 'photo') {
                    $('#imgText').text(result.media_name)
                    $('#media_path_output_image_detail').attr('src', baseURL + '/' + result.media_path)
                }
                $('#' + type + 'Detail').modal('show')
            }
        }
    })
}
</script>