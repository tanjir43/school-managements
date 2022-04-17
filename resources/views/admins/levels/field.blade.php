
                    <div class="form-group row">
                        <label class="col-lg-2  col-form-label" @error('name') is_invalid @enderror for="name">{{__("Level")}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="{{__("Level name")}}" value="{{isset($level) ? $level->name : old('name')}}">
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    {{-- @error('level_name')
                        <span class="alert alert-danger">{{$message}}</span>
                    @enderror --}}
                   
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label"  @error('status') is_invalid @enderror for="status"> {{__("Status")}}<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <select class="form-control" id="status" name="status" style="width: 100%;">
                              @foreach (Helper::getStatus() as $key=>$status )
                                  <option value="{{$key}}" {{ isset($level) ? Helper::getSelectedValue($key , $level->status) : '' }}>{{$status}}</option>
                              @endforeach
                                
                            </select>
                        </div>
                        @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                         @enderror
                    </div>
                   
                    
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label "  @error('description') is_invalid @enderror>{{__('Description')}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <textarea class="form-control" id="summernote" name="description" rows="5">{{isset($level) ? $level->description : ''}}</textarea>
                        </div>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                         @enderror
                    </div>
              
                    <div class="form-group row">
                        <div class="col-lg-10 ml-auto">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
