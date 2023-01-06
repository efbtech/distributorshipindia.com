@extends('layouts.weblayout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <h4>Welcome Rajat Shah</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
        <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-link active" id="nav-home-tab" href="{{URL::to('dashboard')}}">Dashboard</a>
    <a class="nav-link" id="nav-home-tab" href="{{URL::to('add-listing')}}">Add Listing</a>
    <a class="nav-link" id="nav-profile-tab" href="dashboard/profile">Profile</a>
    <a class="nav-link" id="nav-contact-tab" href="dashboard/inbox">Inbox</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent" style="border: 1px solid #CCC; background: #FFF; margin-top: -1px; padding: 17px;">
  <h5 class="mb-3">Gallery for Post - {{ $mygals->name }}</h5>
  <div>
  <form action="{{ url('web/addgallery') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="listing_id" value="{{ $id }}">
    <input type="file" name="logo"> <input type="submit" name="upload" value="Upload" />
  </form>
  </div>
  <div class="container">
    <div class="row">  
    @if(count($gals) > 0)
    @foreach($gals as $gal)
    <div class="col-sm-3">
      <img class="img-thumbnail" src="{{ url('assets/uploads/distributors/gallary/') }}/{{$gal}}" />
    </div>
    @endforeach
    @endif
    </div>
  </div>
</div>
        </div>
    </div>
</div>

    
@endsection