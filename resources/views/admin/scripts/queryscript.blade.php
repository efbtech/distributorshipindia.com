<div id="sendReply" class="modal fade theme__modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Reply</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin/send-reply') }}" method="post" id="sendReplyForm" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 pb-4">
                        <textarea class="form-control mb-3"  name="response" cols="60" rows="6" placeholder="Please enter your queries"></textarea>
                        <input type="hidden" name="queryid" id="queryid">
                        <input type="hidden" name="fname" id="fname">
                        <input type="hidden" name="lname" id="lname">
                        <input type="hidden" name="sendemail" id="sendemail">
                        <input type="hidden" name="subject" id="subject">
                        <input type="hidden" name="type" id="type">
                        <input type="file" name="attachment" class="form-control">
                    </div>
                    <div class="col-md-12 text-end">
                        <button class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close" type="button">Cancel</button>
                        <button class="btn btn-danger" type="submit">Reply</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
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

function sendReply(id, url, type) {
    $('#type').val(type)
    $.ajax({
        type: 'post',
        url: url,
        data: {
            'id': id,
            'type': type,
            '_token': '{{ csrf_token() }}',
        },
        success: function(result) {
            $('#sendemail').val(result.email)
            $('#queryid').val(result.id)
            $('#fname').val(result.fname)
            $('#lname').val(result.lname)
            $('#subject').val(result.subject)
            $('#sendReply').modal('show')
        }
    })
}
</script>