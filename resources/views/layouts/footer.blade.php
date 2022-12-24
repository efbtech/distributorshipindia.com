<footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <script>
                        document.write(new Date().getFullYear())
                        </script> © distributorshipindia.com <span class="d-none d-sm-inline-block">- Designed by
                            <a href="https://efbtechnology.com/" target="_blank">EFB Technology</a>.</span>
                    </div>

                </div>
            </div>
        </footer>
    </div>

    @include('layouts.modals')


    <!-- END layout-wrapper -->
    
    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/admin/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/wickedpicker.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/jquery-ui.js')}}"></script>
    <script src="{{ asset('assets/admin/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/morris.js/morris.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ asset('assets/admin/js/app.js') }}"></script>
    <script src="{{ asset('js/validate.js') }}"></script>
    <script src="{{ asset('js/validateadditional.js') }}"></script>
    <script src="{{ asset('js/validations.js') }}"></script>
    
    <script>
    function preview_image(event, output_image, remove_img, preview_containers) {
        var file = event.target.files[0];
        var type = file.type;
        console.log(type);
        if (event.target.files[0] != undefined) {
            if (type == 'image/png' || type == 'image/jpeg' || type == 'image/jpg' || type == 'image/gif' || type == 'video/mp4') {
                $('#' + output_image).show();
                var reader = new FileReader();
                reader.onload = function() {
                    var output = document.getElementById(output_image);
                    output.src = reader.result;
                    var ImgPath = $('#' + output_image).attr('src');
                    $('#' + preview_containers).show();
                    $('#' + remove_img).show();
                }
                reader.readAsDataURL(event.target.files[0]);
            }
        } else {
            $('#' + preview_containers).hide();
            $('#' + output_image).hide();
            $('#' + remove_img).hide();
        }
    }

    function removePre(removerid, previewid, previewremoveid, fieldRemove) {
        $('#' + previewid).attr('src', '#');
        $('#' + removerid).hide();
        $('#' + previewremoveid).hide();
        $('#' + fieldRemove).val('');
    }
    var baseURL = '{{url('')}}'
    
    function modelClose(id) {
        setTimeout(function() {
            $('#' + id).modal('hide');
        }, 5000);
    }

    function resetForm(id,resetid,container1,container2) {
        $("div.error").hide();
        $(".error").removeClass("error");
        $('#' + id).trigger('reset');
        $('#' + resetid).val('');
        $('#' + container1).hide()
        $('#' + container2).hide()
    }
    </script>
</body>
</html>