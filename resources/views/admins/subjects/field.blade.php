
                    <div class="form-group row">

                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label"   for="level_id"> {{__("Level")}}<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <select class="form-control" onchange="get_level_grades(this.value)" id="level_id" name="level_id" style="width: 100%;">
                                    @foreach ($levels as $key=>$level )
                                        <option value="{{$level->id}}" {{ isset($subject) ? Helper::getSelectedValue($level , $level->level_id) : '' }}>{{$level->name}}</option>
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
                            <label class="col-lg-2 col-form-label"   for="grade_id"> {{__("Grade")}}<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <select class="form-control" onchange="get_grade_classes(this.value)" id="grade_id" name="grade_id" style="width: 100%;">
                                    <option value="">Select grade</option>
                                </select>
                                @error('grade_id')
                                <div class="alert text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label"   for="class_id"> {{__("Class")}}<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <select class="form-control" onchange="get" id="class_id" name="status" style="width: 100%;">
                                    <option value="">Select class </option>
                                </select>
                                @error('class_id')
                                <div class="alert text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <label class="col-lg-2  col-form-label"  for="name">{{__("Subject name")}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="{{__("subject name")}}" value="{{isset($subject) ? $subject->name : old('name')}}">
                            @error('name')
                            <div class="alert text-danger">
                                {{$message}}
                            </div>
                             @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2  col-form-label"  for="code">{{__("Code")}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text"  class="form-control" id="code" name="code"  value="{{isset($subject) ? $subject->code : old('code')}}">
                            @error('code')
                            <div class="alert text-danger">
                                {{$message}}
                            </div>
                             @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2  col-form-label"  for="credit">{{__("Credit")}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text"  class="form-control" id="credit" name="credit"  value="{{isset($subject) ? $subject->credit : old('credit')}}">
                            @error('credit')
                            <div class="alert text-danger">
                                {{$message}}
                            </div>
                             @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2  col-form-label"  for="credit">{{__("Hour")}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text"  class="form-control" id="hour" name="hour"  value="{{isset($subject) ? $subject->hour : old('hour')}}">
                            @error('hour')
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
                                  <option value="{{$key}}" {{ isset($subject) ? Helper::getSelectedValue($key , $subject->status) : '' }}>{{$status}}</option>
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
                        <div class="col-lg-10 ml-auto">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>




