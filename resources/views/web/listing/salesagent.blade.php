<form>
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
  <h4>Basic Sales Agent Detail</h4>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Brand Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Brand Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Establishment Year</label>
      <input type="text" class="form-control" name="establishment" id="establishment" placeholder="Establishment Year">
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
        <ul>
            <li>
                <input type="checkbox"> Information Technology
                <ul><li><input type="checkbox"> Software</li><li><input type="checkbox"> Hardware</li></ul>
            </li>
            <li>
                <input type="checkbox"> Information Technology
                <ul><li><input type="checkbox"> Software</li><li><input type="checkbox"> Hardware</li></ul>
            </li>
            <li>
                <input type="checkbox"> Information Technology
                <ul><li><input type="checkbox"> Software</li><li><input type="checkbox"> Hardware</li></ul>
            </li>
            <li>
                <input type="checkbox"> Information Technology
                <ul><li><input type="checkbox"> Software</li><li><input type="checkbox"> Hardware</li></ul>
            </li>
            <li>
                <input type="checkbox"> Information Technology
                <ul><li><input type="checkbox"> Software</li><li><input type="checkbox"> Hardware</li></ul>
            </li>
            <li>
                <input type="checkbox"> Information Technology
                <ul><li><input type="checkbox"> Software</li><li><input type="checkbox"> Hardware</li></ul>
            </li>
        </ul>

      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Address">
      <input type="text" class="form-control mt-3" id="inputAddress" placeholder="City">
      <input type="text" class="form-control mt-3" id="inputAddress" placeholder="State">
      <input type="text" class="form-control mt-3" id="inputAddress" placeholder="Zip">
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