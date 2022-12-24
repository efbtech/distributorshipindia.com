<div id="blogDetail" class="modal fade theme__modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Blog detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <img class="mb-1 img-fluid" src="" alt="Blog Image" id="blog_image">
                        <p id="blog_title"></p>
                        <p id="scheduled_date"></p>
                        <p id="meta_desc"></p>
                    </div>
                    <div class="col-md-7">
                        <p id="blog_description"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@if(session()->has('blogsave'))
<script>
$(function() {
    $('#success').modal('show')
    modelClose('success')
});
</script>
@endif

<script>
function blogDetail(id, url) {
    $.ajax({
        type: 'post',
        url: url,
        data: {
            'id': id,
            '_token': '{{ csrf_token() }}',
        },
        success: function(result) {
            $('#blog_title').html('<strong>Title: </strong>'+result.blog_title)
            $('#scheduled_date').html('<strong>Scheduled Date: </strong>'+result.scheduled_date)
            $('#meta_desc').html('<strong>Meta Description: </strong>'+result.meta_desc)
            $('#blog_description').html('<strong>Description: </strong>'+result.blog_description)
            $('#blog_image').attr('src', baseURL + '/' + result.blog_image)
            $('#blogDetail').modal('show')
        }
    })
}

function deleteme(id, url, type) {
        $('#delete_modal').modal('show')
        $('.deleteme').on('click', function() {
            $.ajax({
                type: 'post',
                url: url,
                data: {
                    'id': id,
                    'type': type,
                    '_token': '{{ csrf_token() }}',
                },
                success: function(response) {
                    location.reload();
                    $('#delete_modal').modal('hide');
                }
            })
        })
    }

function checkEditorError(id) {
    var editorContent = tinyMCE.get('blog_description').getContent();
    if (editorContent == '') {
        $('#' + id).html('Blog description is required.');
        $('#' + id).css("color", "red");
    }
    tinymce.get('blog_description').on('keyup', function(e) {
        var editorContent = tinyMCE.get('blog_description').getContent();
        if (editorContent == '') {
            $('#' + id).html('Blog description is required.');
            $('#' + id).css("color", "red");
        } else {
            $('#' + id).html('');
        }
    });
}
$(document).ready(function() {
    $("#blogForm").submit(function(e) {
        var editorContent = tinyMCE.get('blog_description').getContent().replace(/<[^>]*>/g, '').replace('&nbsp;', ' ').length;
        if (editorContent < 1 ) {
            e.preventDefault();
        }
    });
});
</script>