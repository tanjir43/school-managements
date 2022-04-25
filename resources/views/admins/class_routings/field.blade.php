<div class="form-group row">
    <label class="col-lg-2 col-form-label"   for="level_id"> {{__("Level")}}<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <select class="form-control" onchange="get_level_grades(this.value)" id="level_id" name="level_id" style="width: 100%;">
            <option value="" >Select Level</option>
                @foreach ($levels as $key=>$level )
                    <option value="{{$level->id}}" {{ isset($classRouting) ? Helper::getSelectedValue($level->id , $classRouting->level_id) : '' }}>{{$level->name}}</option>
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
            <option value="" disabled selected>Select grade</option>
                @foreach ($grades as $key=>$grade )
                    <option value="{{$grade->id}}" {{ isset($classRouting) ? Helper::getSelectedValue($grade->id , $classRouting->grade_id) : '' }}>{{$grade->name}}</option>
                @endforeach

            </select>
        @error('grade_id')
        <div class="alert text-danger">
            {{$message}}
        </div>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label class="col-lg-2 col-form-label"   for="level_id"> {{__("Classes")}}<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <select class="form-control" onchange="get_class_subjects(this.value)" id="class_id" name="class_id" style="width: 100%;">
            <option value=""  >Select classes</option>
                @foreach ($classes as $key=>$class )
                    <option value="{{$class->id}}" {{ isset($classRouting) ? Helper::getSelectedValue($class->id , $classRouting->class_id) : '' }}>{{$class->name}}</option>
                @endforeach
        </select>
        @error('class_id')
        <div class="alert text-danger">
            {{$message}}
        </div>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label class="col-lg-2 col-form-label"   for="subject_id"> {{__("Subjects")}}<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <select class="form-control" id="subject_id" name="subject_id" style="width: 100%;">
            <option value=""  >Select subjects</option>
                @foreach ($subjects as $key=>$subject )
                    <option value="{{$subject->id}}" {{ isset($classRouting) ? Helper::getSelectedValue($subject->id , $classRouting->subject_id) : '' }}>{{$subject->name}}</option>
                @endforeach
        </select>
        @error('subject_id')
        <div class="alert text-danger">
            {{$message}}
        </div>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label class="col-lg-2 col-form-label"   for="shift_id"> {{__("Shifts")}}<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <select class="form-control" onchange="get_shift_times(this.value)" id="shift_id" name="shift_id" style="width: 100%;">
            <option value=""  >Select shifts</option>
                @foreach ($shifts as $key=>$shift )
                    <option value="{{$shift->id}}" {{ isset($classRouting) ? Helper::getSelectedValue($shift->id , $classRouting->shift_id) : '' }}>{{$shift->name}}</option>
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
    <label class="col-lg-2 col-form-label"   for="time_id"> {{__("Times slot")}}<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <select class="form-control" id="time_id" name="time_id" style="width: 100%;">
            <option value=""  >--Select times--</option>
                @foreach ($times as $key=>$time )
                    <option value="{{$time->id}}" {{ isset($classRouting) ? Helper::getSelectedValue($time->id , $classRouting->time_id) : '' }}>{{$time->start_from .' to' . $time->end_from}}</option>
                @endforeach
        </select>
        @error('time_id')
        <div class="alert text-danger">
            {{$message}}
        </div>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label class="col-lg-2 col-form-label"   for="day_id"> {{__("Days")}}<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <select class="form-control" id="day_id" name="day_id" style="width: 100%;">
            <option value=""  >--Select days--</option>

        @foreach ($days as $key=>$day )
                <option value="{{$day->id}}" {{ isset($day) ? Helper::getSelectedValue($day->id , $day->day_id) : '' }}>{{$day->name}}</option>
            @endforeach
        </select>
        @error('day_id')
        <div class="alert text-danger">
            {{$message}}
        </div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-2 col-form-label"   for="section_id"> {{__("Sections")}}<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <select class="form-control" id="section_id" name="section_id" style="width: 100%;">
            <option value="">--Select section--</option>
            @foreach ($sections as $key=>$section )
                <option value="{{$section->id}}" {{ isset($section) ? Helper::getSelectedValue($section->id , $section->section_id) : '' }}>{{$section->name}}</option>
            @endforeach
        </select>
        @error('section_id')
        <div class="alert text-danger">
            {{$message}}
        </div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-2 col-form-label"   for="session_id"> {{__("Sessions")}}<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <select class="form-control" id="session_id" name="session_id" style="width: 100%;">
            <option value="">--Select session--</option>
            @foreach ($sessions as $key=>$session )
                <option value="{{$session->id}}" {{ isset($session) ? Helper::getSelectedValue($session->id , $session->session_id) : '' }}>{{$session->name .' '. $session->code}}</option>
            @endforeach
        </select>
        @error('section_id')
        <div class="alert text-danger">
            {{$message}}
        </div>
        @enderror
    </div>
</div>



<div class="form-group row">
    <label class="col-lg-2 col-form-label"   for="teachers_id"> {{__("Teachers")}}<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <select class="form-control" id="teachers_id" name="teachers_id" style="width: 100%;">
            @foreach ($levels as $key=>$level )
                <option value="{{$level->id}}" {{ isset($grade) ? Helper::getSelectedValue($level->id , $grade->level_id) : '' }}>{{$level->name}}</option>
            @endforeach
        </select>
        @error('teachers_id')
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
    <div class="col-lg-10 ml-auto">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
</div>


@push('script')


