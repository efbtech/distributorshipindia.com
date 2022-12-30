<form>
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
    <div class="form-group col-md-6">
      <label for="inputEmail4">Type</label>
      <select class="form-control" id="agent_type" name="agent_type"><option value="">Select agent type</option></select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Annual Sale</label>
      <input type="text" class="form-control" name="annual_sale" id="annual_sale" placeholder="annual sale">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Date of Birth</label>
      <input type="date" class="form-control" id="dob" name="dob">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Experience</label>
      <input type="number" class="form-control" name="experience" id="experience" placeholder="experience">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Education</label>
      <select class="form-control" id="education" name="education"><option value="">Select education</option></select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">PAN Number (10 Digits)</label>
      <input type="text" class="form-control" id="pan" name="pan" placeholder="PAN Number">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">GST Available</label>
      <div class="form-control">
      <input type="radio" name="gst_avail" value="1">Yes <input type="radio" name="gst_avail" value="0">No 
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">GST Number (15 Digits)</label>
      <input type="text" class="form-control" name="gst" id="gst" placeholder="GST Number">
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
      <textarea name="product_detail" id="product_detail" class="form-control"></textarea>
    </div>
  </div>
  -----
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>