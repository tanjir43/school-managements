
                    <div class="form-group row">
                        <label class="col-lg-2  col-form-label"  for="name">{{__("Session")}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="{{__("Session name")}}" value="{{isset($session) ? $session->name : old('name')}}">
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
                                  <option value="{{$key}}" {{ isset($session) ? Helper::getSelectedValue($key , $session->status) : '' }}>{{$status}}</option>
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
                            <input type="text"  class="form-control" id="code" name="code"  value="{{isset($session) ? $session->code : old('code')}}">
                            @error('code')
                            <div class="alert text-danger">
                                {{$message}}
                            </div>
                             @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2  col-form-label"  for="current_session">{{__("is Current_session")}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <select class="form-control" id="current_session" name="current_session" style="width: 100%;">
                                @foreach (Helper::getIsCurrentSession() as $key=>$current_session )
                                    <option value="{{$key}}" {{ isset($session) ? Helper::getSelectedValue($key , $session->current_session) : '' }}>{{$current_session}}</option>
                                @endforeach

                            </select>
                            @error('current_session')
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

