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
                            <h4 class="mb-0 font-size-18">Campaigns list</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="campaigns-list.php">Campaigns</a></li>
                                <li class="breadcrumb-item active">Campaigns list</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content-wrapper">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2 align-items-baseline text-end">
                            <a href="{{ url('admin/add-campaign') }}"
                                class="btn btn-danger waves-effect waves-light me-2 mb-3">Add Campaign</a>
                            <form action="" class="d-flex justify-content-end">
                                <div class="input-group col-md-12 media-search-input">
                                    <input type="text" class="form-control waves-effect waves-light me-2 mb-3"
                                        placeholder="Search" name="search" value="{{ $search }}">
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
                                        <th>Date</th>
                                        <th>Campaign name</th>
                                        <th>Organised by</th>
                                        <th>Campaign amount</th>
                                        <th>Campaign duration</th>
                                        <th>Comment</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($campList))
                                    <?php $i = ($campList->currentpage() - 1) * $campList->perpage() + 1;?>
                                    @foreach ($campList as $list)
                                    <tr>
                                        <th>{{ $i++ }}</th>
                                        <td>{{ Carbon\Carbon::parse($list->campaigns_start_date)->format('d F Y') }}</td>
                                        <td>{{ $list->campaigns_title }}</td>
                                        <td>{{ $list->campaigns_orgainsed_by }}</td>
                                        <td>₹ {{  number_format($list->campaigns_amount, 2) }}</td>
                                        <td>@if($list->campaigns_duration == '0') 1 day @else {{ $list->campaigns_duration }} days @endif</td>
                                        <td>
                                            {{ Str::limit($list->campaigns_comment, 60, '') }}
                                            @if (strlen($list->campaigns_comment) > 60)
                                            <span id="dots{{$list->id}}">...</span>
                                            <span id="more{{$list->id}}"
                                                style="display:none;">{{ substr($list->campaigns_comment, 60) }}</span>
                                            <a href="javascript:void(0)" onclick="readMore('{{$list->id}}')"
                                                id="readbtn{{$list->id}}"><b>Read More</b></a>
                                            @endif
                                        </td>

                                        <td
                                            onclick="updateStatus('{{$list->id}}','{{URL::to('admin/campaign-status-update')}}')">
                                            @if($list->status == '1')<span class="btn btn-primary position-relative"
                                                style="cursor: pointer;">Active</span>
                                            @else
                                            <span class="btn btn-secondary position-relative" style="cursor: pointer;">InActive</span>@endif
                                        </td>
                                        <td><a href="{{ url('admin/edit-campaign/'.$list->id) }}" class="px-2">
                                                <i class=" fa-solid fa-pen-to-square"></i></a>
                                            <a href="javascript:void(0)" onclick="deleteme('{{$list->id}}','{{URL::to('admin/deletecampaign')}}')">
                                                <i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between media_list-pagination">
                            Showing {{count($campList)}} records of total {{ $campList->total() }}
                            {{ $campList->links('vendor.pagination.pagination') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@include('admin.scripts.campaignsscript')