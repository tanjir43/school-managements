
                    <div class="form-group row">
                        <label class="col-lg-2  col-form-label"  for="name">{{__("Day")}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="{{__("Day name")}}" value="{{isset($day) ? $day->name : old('name')}}">
                            @error('name')
                            <div class="alert text-danger">
                                {{$message}}
                            </div>
                             @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label"   for="status"> {{__("Status")}}<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <select class="form-control" id="status" name="status" style="width: 100%;">
                              @foreach (Helper::getStatus() as $key=>$status )
                                  <option value="{{$key}}" {{ isset($day) ? Helper::getSelectedValue($key , $day->status) : '' }}>{{$status}}</option>
                              @endforeach

                            </select>
                            @error('status')
                            <div class="alert text-danger">
                                {{$message}}
                            </div>
                             @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-lg-2  col-form-label"  for="code">{{__("Code")}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" readonly class="form-control" id="code" name="code"  value="{{isset($day) ? $day->code : old('code')}}">
                            @error('code')
                            <div class="alert text-danger">
                                {{$message}}
                            </div>
                             @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-10 ml-auto">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
