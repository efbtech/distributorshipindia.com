<form action="{{ url('web/listsubmit') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="listing_type" value="salesagent">
  <div class="form-row">
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="mode" id="mode1" value="appoint" checked>
    <label class="form-check-label" for="inlineRadio1">I want to appoint sales agent</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="mode" id="mode2" value="become">
    <label class="form-check-label" for="inlineRadio2">I want to become sales agent</label>
    </div>
  </div>
  <h4>Basic Sales Agent Detail</h4>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" name="name" />
    </div>
  </div>
  

  <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Category</label>
            <div style="height:200px; overflow-y:scroll;">
                @if($blogRand)
                <ul style="list-style:none; margin:0; padding:0;">
                    @foreach($blogRand['cats'] as $c)
                    <li style="padding-bottom:4px;"><a href="javascript:void('0')"
                            onclick="opensubcat( '{{$c->id}}','{{URL::to('web/subcats')}}' )"><span
                                role="button">{{$c->name}}</span></a></li>
                    @endforeach
                </ul>
                @endif

            </div>
        </div>

        <div class="form-group col-md-6" id="subcatview">
            <label for="inputEmail4">Sub Category</label>
            <ul style="list-style:none; margin:0; padding:0;">
                @foreach($blogRand['firstsubcat'] as $sc)
                <li><input type="checkbox" value="{{$sc->id}}" name="scats[]"> {{$sc->name}}</li>
                @endforeach
            </ul>

        </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Please decribe your business profile</label>
      <textarea name="business_profile" id="business_profile" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Product Detail</label>
      <textarea name="product_detail" id="product_detail" class="form-control"></textarea>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Target Customer</label>
      <textarea name="target_customer" id="target_customer" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Expected Work</label>
      <textarea name="expected_work" id="expected_work" class="form-control"></textarea>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Clients Needed</label>
      <textarea name="client_needed" id="client_needed" class="form-control"></textarea>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Clients Needed</label>
      <textarea name="client_needed" id="client_needed" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Location</label>
      <textarea name="location" id="location" class="form-control"></textarea>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Publish</button>
</form>