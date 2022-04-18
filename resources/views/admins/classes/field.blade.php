
                     <div class="form-group row">
                        <label class="col-lg-2 col-form-label"   for="grade"> {{__("Grade")}}<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <select class="form-control" id="grade" name="grade_id" style="width: 100%;">
                              @foreach ($grades as $key=>$grade )
                                  <option value="{{$grade->id}}" {{ isset($class) ? Helper::getSelectedValue($grade->id , $class->grade_id) : '' }}>{{$grade->name}}</option>
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
                        <label class="col-lg-2  col-form-label"  for="name">{{__("Class name")}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="{{__("class name")}}" value="{{isset($class) ? $class->name : old('name')}}">
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
                                  <option value="{{$key}}" {{ isset($class) ? Helper::getSelectedValue($key , $class->status) : '' }}>{{$status}}</option>
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
                        <label class="col-lg-2  col-form-label"  for="code">{{__("Class code")}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" readonly class="form-control" id="code" name="code" placeholder="{{__("class code")}}" value="{{isset($class) ? $class->code : old('code')}}">
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
