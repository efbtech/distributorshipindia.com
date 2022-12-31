<form action="{{ url('web/listsubmit') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="listing_type" value="franchise">
  <div class="form-row">
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="mode" id="mode1" value="appoint" checked>
    <label class="form-check-label" for="inlineRadio1">I want to appoint franchisee</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="mode" id="mode2" value="become">
    <label class="form-check-label" for="inlineRadio2">I want to become franchisee</label>
    </div>
  </div>
  <h4>Basic Franchisee Detail</h4>
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
      <input type="text" class="form-control" id="name" name="name" placeholder="Brand Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Business Start Year</label>
      <input type="text" class="form-control" name="establishment" id="establishment" placeholder="Establishment Year">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Total no. of companies</label>
      <input type="text" class="form-control" name="total_companies" id="total_companies" placeholder="total companies">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Total no. of franchisee</label>
      <input type="text" class="form-control" name="total_franchisee" id="total_franchisee" placeholder="total franchisee">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Space</label>
      <input type="text" class="form-control" name="space" id="space" placeholder="Space">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Product Keywords</label>
      <input type="text" class="form-control" name="product_keywords" id="product_keywords" placeholder="product keywords">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4" style="width:100%;">Looking for Franchisee Partner</label>
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="fr_partner" id="fr_partner1" value="singleunit" checked>
      <label class="form-check-label" for="inlineRadio1">Single unit franchisee</label>
      </div>
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="fr_partner" id="fr_partner2" value="masterunit">
      <label class="form-check-label" for="inlineRadio2">Master unit franchisee</label>
      </div>
      <p>
        <div class="form-check form-check-inline">
          <input type="text" class="form-control" name="investment_amt" id="investment_amt" placeholder="investment amount">
        </div>
        <div class="form-check form-check-inline">
          <select class="form-control" name="investment_unit" id="investment_unit">
            <option value="INR">INR</option><option value="USD">USD</option>
          </select>
        </div> 
      </p>
    </div>
    <div class="form-group col-md-6">
        <label for="inputPassword4">Franchise Fee: </label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="fee" id="fee1" value="1" checked>
          <label class="form-check-label" for="inlineRadio1">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="fee" id="fee2" value="0">
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
        <br>
        <label for="inputPassword4">Equipments: </label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="equip" id="equip1" value="1" checked>
          <label class="form-check-label" for="inlineRadio1">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="equip" id="equip2" value="0">
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
        <br>
        <label for="inputPassword4">Furniture & Fixtures: </label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="furn" id="furn1" value="1" checked>
          <label class="form-check-label" for="inlineRadio1">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="furn" id="furn2" value="0">
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
        <br>
        <label for="inputPassword4">Advertising / Marketing: </label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="advert" id="advert1" value="1" checked>
          <label class="form-check-label" for="inlineRadio1">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="advert" id="advert2" value="0">
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
    </div>
  </div>

  <hr>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputPassword4" style="width:100%;">Training program available for the franchise: </label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="training_program" id="training_program1" value="1" checked>
          <label class="form-check-label" for="inlineRadio1">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="training_program" id="training_program2" value="0">
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="inputPassword4" style="width:100%;">Software/Hardware support included in franchise fee </label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="softsupport" id="softsupport1" value="1" checked>
          <label class="form-check-label" for="inlineRadio1">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="softsupport" id="softsupport2" value="0">
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
    </div>
  </div>

  <hr>

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

  <hr>
  <div class="form-row">
    <div class="form-group col-md-12">
        <label for="inputEmail4">Is the franchise renewable: &nbsp;&nbsp;&nbsp;</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="is_renew" id="is_renew1" value="1" checked>
          <label class="form-check-label" for="inlineRadio1">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="is_renew" id="is_renew2" value="0">
          <label class="form-check-label" for="inlineRadio2">No</label>
        </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Business Profile</label>
      <textarea name="business_profile" class="tinymce-editor"></textarea>
    </div>
  </div>

  <div class="form-row">
        <div class="form-group col-md-6">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmail4">Meta Title</label>
              <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title">
              <span id="meta_title-error" class="error text-danger" for="input-meta_title">{{ $errors->first('meta_title') }}</span>
            </div>
            <div class="form-group col-md-12">
              <label for="inputEmail4">Meta Description</label>
              <input type="text" class="form-control" id="meta_desc" name="meta_desc" placeholder="Meta Description">
              <span id="meta_desc-error" class="error text-danger"
                  for="input-meta_desc">{{ $errors->first('meta_desc') }}</span>
            </div>
          </div> 
        </div>

        <div class="form-group col-md-6">
            <label>Image</label>
            <input type="file" name="logo">
            <div id="imgholder" style="width:100%; height:200px; background:#CCC;"></div>
        </div>
  </div>

  <button type="submit" class="btn btn-primary">Publish</button>
</form>