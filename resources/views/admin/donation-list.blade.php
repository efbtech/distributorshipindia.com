 @include('layouts.header') 
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title">
                            <h4 class="mb-0 font-size-18">Donation List</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="donation-list.php">Donation</a></li>
                                <li class="breadcrumb-item active">Donation List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- Start page content-wrapper -->
            <div class="page-content-wrapper">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover mb-0">
                                <thead>
                                    <tr class="table-warning">
                                        <th>#</th>
                                        <th>Transaction Id</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Amount</th>
                                        <th>Reason</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(isset($donations))
                                <?php $i = ($donations->currentpage() - 1) * $donations->perpage() + 1;?>
                                    @foreach ($donations as $list)
                                    <tr>
                                        <th>{{ $i++ }}</th>
                                        <th>{{ $list->transaction_id }}</th>
                                        <th>{{ $list->doner_name }}</th>
                                        <td>+91 899-9876-567</td>
                                        <td>mark@gmail.com</td>
                                        <td>{{ number_format($list->amount,2) }}</td>
                                        <td>Birthday</td>
                                        <td><a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#donationView"><i
                                                    class="fa-sharp fa-solid fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between media_list-pagination">
                            Showing {{count($donations)}} records of total {{ $donations->total() }}
                            {{ $donations->links('vendor.pagination.pagination') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->
<div id="donationView" class="modal fade theme__modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Donation detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Name:</strong> Mark</p>
                <p><strong>Phone:</strong> +91 899-9876-567</p>
                <p><strong>Email:</strong> mark@gmail.com</p>
                <p><strong>Amount:</strong> 10000</p>
                <p><strong>Reason:</strong> Birthday</p>
                <p><strong>Description:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores
                    temporibus, pariatur praesentium facilis nihil ab optio, doloribus ipsum impedit tenetur quibusdam
                    laboriosam illo recusandae ullam deleniti debitis ea itaque earum? </p>
            </div>
            <!-- <div class="modal-footer text-end mt-3">
                <button type="button" class="btn btn-danger waves-effect waves-light me-2">Submit</button>
                <button type="button" class="btn btn-warning waves-effect waves-light"
                    data-bs-dismiss="modal">Cancel</button>
            </div> -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
 
@include('layouts.footer')
 
