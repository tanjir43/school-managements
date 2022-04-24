
                    <div class="form-group row">
                        <label class="col-lg-2  col-form-label"  for="shift_id">{{__("Shift")}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <select class="form-control" id="shift_id" name="shift_id" style="width: 100%;">
                                @foreach ($shifts as $key=>$shift )
                                    <option value="{{$shift->id}}" {{ isset($time) ? Helper::getSelectedValue($shift->id , $time->shift_id) : '' }}>{{$shift->name}}</option>
                                @endforeach

                            </select>

                            @error('shift_id')
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
                                  <option value="{{$key}}" {{ isset($time) ? Helper::getSelectedValue($key , $time->status) : '' }}>{{$status}}</option>
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
                            <input type="text" readonly class="form-control" id="code" name="code"  value="{{isset($time) ? $time->code : old('code')}}">
                            @error('code')
                            <div class="alert text-danger">
                                {{$message}}
                            </div>
                             @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2  col-form-label"  for="start">{{__("Start_from")}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="time"  class="form-control" id="start" name="start_from"  value="{{isset($time) ? $time->start_from : old('start_from')}}">
                            @error('start_from')
                            <div class="alert text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2  col-form-label"  for="end">{{__("End_from")}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="time"  class="form-control" id="end" name="end_from"  value="{{isset($time) ? $time->start_from : old('end_from')}}">
                            @error('end_from')
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
