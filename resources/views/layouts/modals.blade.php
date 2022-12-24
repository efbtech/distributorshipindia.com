<!-- success modal start -->
<div id="success" class="modal fade theme__modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-4">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid w-25 py-3" src="{{ asset('assets/admin/images/success.png') }}"
                                alt="delete">
                            <h3 class="">Congratulations</h3>
                            @if(Session::has('blogsave'))
                            <p class="mb-3">{{ Session::get('blogsave') }}</p>
                            @elseif(Session::has('termscond'))
                            <p class="mb-3">{{ Session::get('termscond') }}</p>
                            @elseif(Session::has('privacyPolicy'))
                            <p class="mb-3">{{ Session::get('privacyPolicy') }}</p>
                            @elseif(Session::has('campsess'))
                            <p class="mb-3">{{ Session::get('campsess') }}</p>
                            @elseif(Session::has('savenews'))
                            <p class="mb-3">{{ Session::get('savenews') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-success waves-effect waves-light me-2 px-5 rounded"
                            data-bs-dismiss="modal">Continue</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- success modal end -->

    <!-- delete modal start -->
    <div id="delete_modal" class="modal fade theme__modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-4">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid w-25 py-3" src="{{ asset('assets/admin/images/delete.jpg') }}"
                                alt="delete">
                            <h3 class="">Are You Sure?</h3>
                            <p class="mb-3">Do you really want to delete these record? <br> This process cannot be
                                undone.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-danger waves-effect waves-light me-2"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success deleteme">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- delete modal end -->

    <!-- delete modal start -->
    <div id="no_delete" class="modal fade theme__modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-4">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid w-25 py-3" src="{{ asset('assets/admin/images/delete.jpg') }}"
                                alt="delete">
                            <h3 class="">Oops!</h3>
                            <p class="mb-3" id="nomsg">Do you really want to delete these record? <br> This process cannot be
                                undone.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- delete modal end -->