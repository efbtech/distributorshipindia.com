<style>.becomemode{display:none;}</style>
<form action="{{ url('web/listsubmit') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="listing_type" value="distributor">
    <div class="form-row">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="mode" id="mode1" value="appoint" onclick="openform('appointmode')" checked>
            <label class="form-check-label" for="inlineRadio1">I want to appoint distributor</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="mode" id="mode2" value="become" onclick="openform('becomemode')">
            <label class="form-check-label" for="inlineRadio2">I want to become distributor</label>
        </div>
    </div>
    <h4>Basic Distributor Detail</h4>
    <div class="appointmode">
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
                <input type="text" class="form-control" name="establishment" id="establishment"
                    placeholder="Establishment Year">
                <span id="establishment-error" class="error text-danger"
                    for="input-establishment">{{ $errors->first('establishment') }}</span>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">PAN Number (10 Digits)</label>
                <input type="text" class="form-control" id="pan" name="pan" placeholder="PAN Number">
                <span id="pan-error" class="error text-danger" for="input-pan">{{ $errors->first('pan') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">GST Number (15 Digits)</label>
                <input type="text" class="form-control" name="gst" id="gst" placeholder="GST Number">
                <span id="gst-error" class="error text-danger" for="input-gst">{{ $errors->first('gst') }}</span>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Company Anual Sale</label>
                <div class="row">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="anualsale_start" name="anualsale_start"
                            placeholder="From">
                        <span id="anualsale_start-error" class="error text-danger"
                            for="input-anualsale_start">{{ $errors->first('anualsale_start') }}</span>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="anualsale_end" name="anualsale_end" placeholder="To">
                        <span id="anualsale_end-error" class="error text-danger"
                            for="input-anualsale_end">{{ $errors->first('anualsale_end') }}</span>
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control" id="anualsale_unit" name="anualsale_unit">
                            <option>Lacs</option>
                            <option>Cr</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group col-md-6">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Total No. of distributors</label>
                        <input type="text" class="form-control" name="total_distributors" id="total_distributors"
                            placeholder="Total No. of distributors">
                        <span id="total_distributors-error" class="error text-danger"
                            for="input-total_distributors">{{ $errors->first('total_distributors') }}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Space (Sq.Ft.)</label>
                        <input type="text" class="form-control" name="space" id="space" placeholder="Space (Sq.Ft.)">
                        <span id="space-error" class="error text-danger"
                            for="input-space">{{ $errors->first('space') }}</span>
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
                <label for="inputEmail4">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                <span id="address-error" class="error text-danger"
                    for="input-address">{{ $errors->first('address') }}</span>
                <input type="text" class="form-control mt-3" id="city" name="city" placeholder="City">
                <span id="city-error" class="error text-danger" for="input-city">{{ $errors->first('city') }}</span>
                <input type="text" class="form-control mt-3" id="state" name="state" placeholder="State">
                <span id="state-error" class="error text-danger" for="input-state">{{ $errors->first('state') }}</span>
                <input type="text" class="form-control mt-3" id="zip" name="zip" placeholder="Zip">
                <span id="zip-error" class="error text-danger" for="input-zip">{{ $errors->first('zip') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label>Image</label>
                <input type="file" name="logo">
                <div id="imgholder" style="width:100%; height:200px; background:#CCC;"></div>
            </div>
            
        </div>
    </div>
    <div class="becomemode">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail4">Title</label>
                <input type="text" class="form-control" id="bname" name="bname" placeholder="Title">
                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
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

            <div class="form-group col-md-6" id="bsubcatview">
                <label for="inputEmail4">Sub Category</label>
                <ul style="list-style:none; margin:0; padding:0;">
                    @foreach($blogRand['firstsubcat'] as $sc)
                    <li><input type="checkbox" value="{{$sc->id}}" name="bscats[]"> {{$sc->name}}</li>
                    @endforeach
                </ul>

            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Investment Capacity</label>
                <div class="row">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="investment_start" name="investment_start"
                            placeholder="From">
                        <span id="investment_start-error" class="error text-danger"
                            for="input-investment_start">{{ $errors->first('investment_start') }}</span>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="investment_end" name="investment_end" placeholder="To">
                        <span id="investment_end-error" class="error text-danger"
                            for="input-investment_end">{{ $errors->first('investment_end') }}</span>
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control" id="investment_unit" name="investment_unit">
                            <option>Lacs</option>
                            <option>Cr</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="inputPassword4">How soon would you like to invest</label>
                <select class="form-control" id="how_soon_invest" name="how_soon_invest">
                    <option value="1month">In 1 month</option>
                    <option value="6month">In 6 month</option>
                    <option value="1year">In 1 year</option>
                </select>
                
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">PAN Number (10 Digits)</label>
                <input type="text" class="form-control" id="bpan" name="bpan" placeholder="PAN Number">
                <span id="bpan-error" class="error text-danger" for="input-bpan">{{ $errors->first('pan') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">GST Number (15 Digits)</label>
                <input type="text" class="form-control" name="bgst" id="bgst" placeholder="GST Number">
                <span id="bgst-error" class="error text-danger" for="input-bgst">{{ $errors->first('gst') }}</span>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Product Keywords</label>
                <input type="text" class="form-control" id="bpan" name="bpan" placeholder="PAN Number">
                <span id="bpan-error" class="error text-danger" for="input-bpan">{{ $errors->first('pan') }}</span>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Experience</label>
                <input type="text" class="form-control" name="bgst" id="bgst" placeholder="GST Number">
                <span id="bgst-error" class="error text-danger" for="input-bgst">{{ $errors->first('gst') }}</span>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
            <label for="inputEmail4">Describe Profile</label>
                <textarea class="form-control" id="babout" name="babout"></textarea>
            </div>
        </div>

    </div>

    <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Meta Title</label>
                <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title">
                <span id="meta_title-error" class="error text-danger"
                    for="input-meta_title">{{ $errors->first('meta_title') }}</span>
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Meta Description</label>
                <input type="text" class="form-control" id="meta_desc" name="meta_desc" placeholder="Meta Description">
                <span id="meta_desc-error" class="error text-danger"
                    for="input-meta_desc">{{ $errors->first('meta_desc') }}</span>
            </div>
    </div>


    <button type="submit" class="btn btn-primary">Publish</button>
    

    </form>