<form action="{{ url('web/listsubmit') }}" method="post">
@csrf
  <div class="form-row">
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="mode" id="mode1" value="appoint" checked>
    <label class="form-check-label" for="inlineRadio1">I want to appoint distributor</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="mode" id="mode2" value="become">
    <label class="form-check-label" for="inlineRadio2">I want to become distributor</label>
    </div>
  </div>
  <h4>Basic Distributor Detail</h4>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Title">
      <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Brand Name</label>
      <input type="text" class="form-control" id="name" name="brand" placeholder="Brand Name">
      <span id="name-error" class="error text-danger" for="input-brand">{{ $errors->first('brand') }}</span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Establishment Year</label>
      <input type="text" class="form-control" name="establishment" id="establishment" placeholder="Establishment Year">
      <span id="establishment-error" class="error text-danger" for="input-establishment">{{ $errors->first('establishment') }}</span>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">PAN Number (10 Digits)</label>
      <input type="text" class="form-control" id="pan" name="pan" placeholder="PAN Number">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">GST Number (15 Digits)</label>
      <input type="text" class="form-control" name="gst" id="gst" placeholder="GST Number">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Company Anual Sale</label>
      <div class="row">
      <div class="col-sm-4">
      <input type="text" class="form-control" id="anualsale_start" name="anualsale_start" placeholder="From">
      </div>
      <div class="col-sm-4">
      <input type="text" class="form-control" id="anualsale_end" name="anualsale_end" placeholder="To">
      </div>
      <div class="col-sm-4">
      <select class="form-control" id="anualsale_unit" name="anualsale_unit">
        <option>Lacs</option><option>Cr</option>
      </select>
      </div>
      </div>
    </div>
    <div class="form-group col-md-6">
        <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputPassword4">Total no. of distributors</label>
        <input type="text" class="form-control" name="total_distributors" id="total_distributors" placeholder="total distributors">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Space (Sq.Ft.)</label>
        <input type="text" class="form-control" name="space" id="space" placeholder="space">
        </div>
        </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Category</label>
      <div style="height:200px; overflow-y:scroll;">
      @if($blogRand)
      <ul style="list-style:none; margin:0; padding:0;">
        @foreach($blogRand['cats'] as $c)
        <li style="padding-bottom:4px;"><a onclick="opensubcat({{$c->id}})">{{$c->name}}</a></li>
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
      <label for="inputEmail4">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Address">
      <input type="text" class="form-control mt-3" id="inputAddress" placeholder="City">
      <input type="text" class="form-control mt-3" id="inputAddress" placeholder="State">
      <input type="text" class="form-control mt-3" id="inputAddress" placeholder="Zip">
    </div>
    <div class="form-group col-md-6">
      <label>Image</label>
      <input type="file" name="image">
      <div id="imgholder" style="width:100%; height:200px; background:#CCC;"></div>
    </div>
  
  <button type="submit" class="btn btn-primary">Publish</button>
</form>