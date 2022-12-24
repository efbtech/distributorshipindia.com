<?php include 'header.php' ?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title">
                            <h4 class="mb-0 font-size-18">Payment list</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="donation-list.php">Payment</a></li>
                                <li class="breadcrumb-item active">Payment list</li>
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
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Payment mode</th>
                                        <th>Payment amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>001</th>
                                        <th>Mark</th>
                                        <td>+91 899-9876-567</td>
                                        <td>mark@gmail.com</td>
                                        <td>Debit Card</td>
                                        <td>10000</td>
                                        <td><a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#paymentView"><i class="fa-sharp fa-solid fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>001</th>
                                        <th>Mark</th>
                                        <td>+91 899-9876-567</td>
                                        <td>mark@gmail.com</td>
                                        <td>Credit Card</td>
                                        <td>10000</td>
                                        <td><a href="javascript:void(0)"><i class="fa-sharp fa-solid fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>001</th>
                                        <th>Mark</th>
                                        <td>+91 899-9876-567</td>
                                        <td>mark@gmail.com</td>
                                        <td>UPI</td>
                                        <td>10000</td>
                                        <td><a href="javascript:void(0)"><i class="fa-sharp fa-solid fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>001</th>
                                        <th>Mark</th>
                                        <td>+91 899-9876-567</td>
                                        <td>mark@gmail.com</td>
                                        <td>Debit Card</td>
                                        <td>10000</td>
                                        <td><a href="javascript:void(0)"><i class="fa-sharp fa-solid fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>001</th>
                                        <th>Mark</th>
                                        <td>+91 899-9876-567</td>
                                        <td>mark@gmail.com</td>
                                        <td>Debit Card</td>
                                        <td>10000</td>
                                        <td><a href="javascript:void(0)"><i class="fa-sharp fa-solid fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>001</th>
                                        <th>Mark</th>
                                        <td>+91 899-9876-567</td>
                                        <td>mark@gmail.com</td>
                                        <td>Credit Card</td>
                                        <td>10000</td>
                                        <td><a href="javascript:void(0)"><i class="fa-sharp fa-solid fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>001</th>
                                        <th>Mark</th>
                                        <td>+91 899-9876-567</td>
                                        <td>mark@gmail.com</td>
                                        <td>UPI</td>
                                        <td>10000</td>
                                        <td><a href="javascript:void(0)"><i class="fa-sharp fa-solid fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>001</th>
                                        <th>Mark</th>
                                        <td>+91 899-9876-567</td>
                                        <td>mark@gmail.com</td>
                                        <td>Debit Card</td>
                                        <td>10000</td>
                                        <td><a href="javascript:void(0)"><i class="fa-sharp fa-solid fa-eye"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end page-content-wrapper-->
        </div>
        <!-- Container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
<!-- end main content-->
<div id="paymentView" class="modal fade theme__modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Payment detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Name:</strong> Mark</p>
                <p><strong>Phone:</strong> +91 899-9876-567</p>
                <p><strong>Email:</strong> mark@gmail.com</p>
                <p><strong>Payment mode:</strong> Birthday</p>
                <p><strong>Payment amount:</strong> 10000</p>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php include 'footer.php' ?>