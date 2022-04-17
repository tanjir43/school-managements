
                    <div class="form-group row">
                        <label class="col-lg-2  col-form-label"  for="name">{{__("Grade")}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="{{__("Grade name")}}" value="{{isset($grade) ? $grade->name : old('name')}}">
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
                                  <option value="{{$key}}" {{ isset($grade) ? Helper::getSelectedValue($key , $grade->status) : '' }}>{{$status}}</option>
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
                        <label class="col-lg-2 col-form-label"   for="level"> {{__("Level")}}<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <select class="form-control" id="level" name="level_id" style="width: 100%;">
                              @foreach ($levels as $key=>$level )
                                  <option value="{{$level->id}}" {{ isset($grade) ? Helper::getSelectedValue($level->id , $grade->level_id) : '' }}>{{$level->name}}</option>
                              @endforeach
                                
                            </select>
                            @error('level_id')
                            <div class="alert text-danger">
                                {{$message}}
                            </div>
                             @enderror
                        </div>                 
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label " >{{__('Description')}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <textarea class="form-control" id="summernote" name="description" rows="5">{{isset($grade) ? $grade->description : ''}}</textarea>
                            @error('description')
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
