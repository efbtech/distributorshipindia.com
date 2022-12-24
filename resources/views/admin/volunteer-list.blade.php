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
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title">
                            <h4 class="mb-0 font-size-18">Volunteer list</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="volunteer-list.php">Volunteer</a></li>
                                <li class="breadcrumb-item active">Volunteer list</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content-wrapper">
                <div class="card">
                    <div class="card-body">
                    <div class="d-flex justify-content-end mb-2 align-items-baseline text-end">
                            <form action="" class="d-flex justify-content-end">
                                <div class="input-group col-md-12 media-search-input">
                                    <input type="text" class="form-control waves-effect waves-light me-2 mb-3"
                                        placeholder="Search" name="search" value="">
                                    <button class="btn btn-danger waves-effect waves-light me-2 mb-3 mr-0"
                                        type="submit"><i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover mb-0">
                                <thead>
                                    <tr class="table-warning">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Reply</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($volunteer))
                                    <?php $i = ($volunteer->currentpage() - 1) * $volunteer->perpage() + 1;?>
                                    @foreach ($volunteer as $list)
                                    <tr>
                                        <th>{{ $i++ }}</th>
                                        <th>{{ $list->fname }} {{ $list->lname }}</th>
                                        <td>+91 {{ $list->phone }}</td>
                                        <td>{{ $list->email }}</td>
                                        <td>{{ $list->subject }}</td>
                                        <td>
                                            {{ Str::limit($list->message, 60, '') }}
                                            @if (strlen($list->message) > 60)
                                            <span id="dots{{$list->id}}">...</span>
                                            <span id="more{{$list->id}}"
                                                style="display:none;">{{ substr($list->message, 60) }}</span>
                                            <a href="javascript:void(0)" onclick="readMore('{{$list->id}}')"
                                                id="readbtn{{$list->id}}"><b>Read More</b></a>
                                            @endif
                                        </td>
                                        <td><a href="javascript:void(0)"
                                                onclick="sendReply('{{$list->id}}','{{URL::to('admin/single-email')}}','volunteer')">
                                                <i class="fa-sharp fa-solid fa-pencil"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between media_list-pagination">
                            Showing {{count($volunteer)}} records of total {{ $volunteer->total() }}
                            {{ $volunteer->links('vendor.pagination.pagination') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@include('admin.scripts.queryscript')