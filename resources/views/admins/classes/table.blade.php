@push('style')
<link href="{{ asset('jambasangsang/assets/css/lib/data-table/buttons.bootstrap.min.css')}}" rel="stylesheet" />

@endpush
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h6>{{Str::ucfirst(request()->segment(3))}}</h6>
            <a href="{{route('classes.create')}}"><i class="fa fa-plus-circle text-success pull-right">Add new class</i></a>
        </div>
        <div class="card-body mt-2">
        <div class="bootstrap-data-table-panel">
            <div class="table-responsive">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>SL no</th>
                            <th>Grade</th>
                            <th>Name</th>
                            <th>code</th>
                            <th>status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classes as  $class)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$class->grade->name}}</td>
                            <td>{{$class->name}}</td>

                            <td {{Helper::getStatusClass($class->status)}}>{{Helper::getStatusValue($class->status)}}</td>
                            <td>{{$class->code}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-default btn-flat" href="{{route('classes.edit', $class->id)}}"><i class="fa fa-edit"></i></a>
                                   
                                    <a class="btn btn-danger btn-flat ml-2 btnDelete" href="#DeleteConfirmation"
                                     data-toggle="modal" data-url="{{route('classes.destroy' ,$class->id)}}">
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
<x-modals.delete :title="'Class'"></x-modals.delete>


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

