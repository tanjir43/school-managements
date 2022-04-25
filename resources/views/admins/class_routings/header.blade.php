<div class="col-md-12 col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="vtabs customvtab">
                <ul class="nav nav-tabs tabs-horizontal" role="tablist">
                    <li class="nav-item"> <a class="nav-link {{Request::segment('3') == "create" ? 'active' : ''}} "    href="{{route('classRoutings.create')}}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{__('Create new class routing')}}</span> </a> </li>
                    <li class="nav-item"> <a class="nav-link {{Request::segment('3') == "grades" ? 'active' : ''}} "    href="{{route('grades.index')}}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{__('Generate class Timetables')}}</span></a> </li>
                    <li class="nav-item"> <a class="nav-link {{Request::segment('3') == "classes" ? 'active' : ''}} "   href="{{route('classes.index')}}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{__('Generate Teachers Timetables')}}</span></a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
