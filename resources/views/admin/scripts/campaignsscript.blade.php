
<!-- Editor Initilazition -->
<script>
tinymce.init({
    selector: 'textarea#campaigns_desc',
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

@if(session()->has('campsess'))
<script>
$(function() {
    $('#success').modal('show')
    modelClose('success')
});
</script>
@endif

<script>
function checkEditorError(id) {
    var editorContent = tinyMCE.get('campaigns_desc').getContent();
    if (editorContent == '') {
        $('#' + id).html('Blog description is required.');
        $('#' + id).css("color", "red");
    }
    tinymce.get('campaigns_desc').on('keyup', function(e) {
        var editorContent = tinyMCE.get('campaigns_desc').getContent();
        if (editorContent == '') {
            $('#' + id).html('Blog description is required.');
            $('#' + id).css("color", "red");
        } else {
            $('#' + id).html('');
        }
    });
}
$(document).ready(function() {
    $("#campaignForm").submit(function(e) {
        var editorContent = tinyMCE.get('campaigns_desc').getContent().replace(/<[^>]*>/g, '').replace('&nbsp;', ' ').length;
        if (editorContent < 1 ) {
            e.preventDefault();
        }
    });
});

function readMore(id) {
    var dots = document.getElementById("dots" + id);
    var moreText = document.getElementById("more" + id);
    var btnText = document.getElementById("readbtn" + id);

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "<b>Read More</b>";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "<b>Read Less</b>";
        moreText.style.display = "inline";
    }
}

function updateStatus(id,url){
    $.ajax({
        type: 'post',
        url: url,
        data: { 'id':id, '_token': '{{ csrf_token() }}',},
        success: function(result) {
            location.reload();
        }
    })
}

function deleteme(id, url) {
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
</script>