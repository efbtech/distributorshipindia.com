@include('layouts.header')
@php
$search = '';
if(isset($_GET['search'])){
$search = $_GET['search'];
}
@endphp
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title">
                            <h4 class="mb-0 font-size-18">Users list</h4>
                            <!--<ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="subscription-list.php">Subscription</a></li>
                                <li class="breadcrumb-item active">Subscription list</li>
                            </ol>-->
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
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(isset($subList))
                                <?php $i = ($subList->currentpage() - 1) * $subList->perpage() + 1;?>
                                    @foreach ($subList as $list)
                                    <tr>
                                        <th>{{ $i++ }}</th>
                                        <th>{{ $list->name }}</th>
                                        <td>+91 899-9876-567</td>
                                        <td>{{ $list->email }}</td>
                                        <td>@if($list->intrested == 0) Distributor @endif @if($list->intrested == 1) Frenchies @endif @if($list->intrested == 2) Sales Agent @endif</td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="subscriptionView" class="modal fade theme__modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Subscription detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Name:</strong> Mark</p>
                <p><strong>Phone:</strong> +91 899-9876-567</p>
                <p><strong>Email:</strong> mark@gmail.com</p>
                <p><strong>Subscription:</strong> 3 months</p>
                <p><strong>Amount:</strong> 30000</p>
                <p><strong>Reason:</strong> Donation Change Someone’s Life </p>
                <p><strong>Description:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum hic
                    maiores velit repellat provident corporis voluptas officia, nemo amet perspiciatis optio enim beatae
                    explicabo quas aliquam vel recusandae eveniet at.</p>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')