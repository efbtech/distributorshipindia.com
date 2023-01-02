<form action="{{ url('/web/search/distributor') }}" method="POST">
  @csrf
                <div class="container">
                  
                  <div class="row">
                    
                    <div class="col-sm-4 col-md-4 col-lg-4 col-12  mb-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" value="" name="lookingfor" checked id="defaultCheck1">
                        <label class="form-check-label  text-white"  for="defaultCheck1">Companies looking for Distributors
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-12 mb-3 ">
                      <div class="form-check">
                        <!-- <input class="form-check-input" type="radio" name="lookingfor" unchecked value="" id="defaultCheck1" >
                        <label class="form-check-label text-white" for="defaultCheck2">Companies want to become Distributors
                        </label> -->
                      </div>
                    </div>
                    
                    <div class="col-sm-4 col-md-4 col-lg-4 col-12 ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-5 col-md-5 col-lg-5 col-12  mb-3  ">
                      <select name="industry_category" class="selectpicker form-control" >
                        <option value="" >---Categories----</option>
                        @foreach($cats as $cat)
                          <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-12 mb-3 ">
                      <input type="text" name="searchkeywords" class="form-control" placeholder="Search keywords" >
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-12 ">
                      <button type="submit" name="submitnew" class="btn btn-light">Search</button>
                    </div>
                  </div>
                </div>
                
              </form>
              
            </div>