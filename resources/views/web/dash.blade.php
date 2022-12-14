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
  <h5>You are interested in <span style="background: #102e4c;color: #FFF;padding: 6px;border-radius: 11px;">@if(auth()->user()->intrested == 1) Frenchise @elseif(auth()->user()->intrested == 2) Sales Agent @else Distributors @endif</span></h5>
  @if($listing)
  @foreach($listing as $list)
  <div class="card">
    <div class="row">
      <div class="col-sm-3"><img src="{{ $list->logo }}" style="width:150px;"></div>
      <div class="col-sm-6 mt-3"><strong>{{ $list->name }}</strong><br>{{ $list->anualsale_start }} - {{ $list->anualsale_end }} {{ $list->anualsale_unit }}<br>Brand: {{ $list->brand }}</div>
      <div class="col-sm-3 mt-3"><a class="btn btn-sm btn-danger" href="{{ url('/dash/gallery/') }}/{{ $list->id }}">Gallery</a> <a class="btn btn-sm btn-danger" href="#">View</a> <a class="btn btn-sm btn-danger" href="#">Edit</a></div>
    </div>
  </div>
  @endforeach
  @endif
</div>
        </div>
    </div>
</div>

    
@endsection