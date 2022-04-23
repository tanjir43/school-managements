@push('style')
<link href="{{ asset('jambasangsang/assets/css/lib/data-table/buttons.bootstrap.min.css')}}" rel="stylesheet" />

@endpush
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h6>{{Str::ucfirst(request()->segment(3))}}</h6>
            <a href="{{route('subjects.create')}}"><i class="fa fa-plus-circle text-success pull-right">Add new subject</i></a>
        </div>
        <div class="card-body mt-2">
        <div class="bootstrap-data-table-panel">
            <div class="table-responsive">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>SL no</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Credit</th>
                            <th>Hour</th>
                            <th>Assignment %</th>
                            <th>Final %</th>
                            <th>status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as  $subject)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$subject->name}}</td>
                            <td>{{$subject->code}}</td>
                            <td>{{$subject->credit}}</td>
                            <td>{{$subject->hour}}</td>
                            <td>{{$subject->assignment_percentage ?? 0}}</td>
                            <td>{{$subject->final_percentage ?? 0}}</td>

                            <td {{Helper::getStatusClass($subject->status)}}>{{Helper::getStatusValue($subject->status)}}</td>
                            <td>
                                <div class="btn-group">

                                    <a class="btn btn-success btn-flat  addScoreBtn" href="#addScoreModal"
                                    data-toggle="modal" title="score %" data-id="{{ $subject->id }}" data-subject="{{$subject->name}}">
                                    <i class="fa fa-plus"></i></a>

                                    <a class="btn btn-default btn-flat ml-2" href="{{route('subjects.edit', $subject->id)}}"><i class="fa fa-edit"></i></a>

                                     <a class="btn btn-danger btn-flat ml-2 btnDelete" href="#DeleteConfirmation"
                                     data-toggle="modal" data-url="{{route('subjects.destroy' ,$subject->id)}}">
                                     <i class="fa fa-trash"></i></a>

                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
         </div>
       </div>
    </div>
    <!-- /# card -->
</div>
<x-Modals.delete :title="'Subject'"></x-Modals.delete>


@push('script')
<script src="{{ asset('jambasangsang/assets/js/lib/data-table/datatables.min.js ')}}"></script>
<script src="{{ asset('jambasangsang/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('jambasangsang/assets/js/lib/data-table/buttons.flash.min.js')}}"></script>
<script src="{{ asset('jambasangsang/assets/js/lib/data-table/jszip.min.js')}}"></script>
<script src="{{ asset('jambasangsang/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
<script src="{{ asset('jambasangsang/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
<script src="{{ asset('jambasangsang/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
<script src="{{ asset('jambasangsang/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
<script src="{{ asset('jambasangsang/assets/js/lib/data-table/datatables-init.js')}}"></script>
@endpush

