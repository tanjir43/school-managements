
                    <div class="form-group row">
                        <label class="col-lg-2  col-form-label" for="level_name">{{__("Level")}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="level_name" name="level_name" placeholder="{{__("Level name")}}">
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label" for="level_status"> {{__("Status")}}<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <select class="js-select2 form-control" id="level_status" name="level_status" style="width: 100%;">
                               <option disabled selected value="">{{__("Select one")}}</option>
                                <option value="1">{{__("Active")}}</option>
                                <option value="0">{{__("Inactive")}}</option>
                                
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Description <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <textarea class="form-control" id="summernote" name="level_description" rows="5"></textarea>
                        </div>
                    </div>
              
                    <div class="form-group row">
                        <div class="col-lg-10 ml-auto">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
 