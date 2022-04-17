@push('style')
<link href="{{ asset('jambasangsang/assets/css/lib/data-table/buttons.bootstrap.min.css')}}" rel="stylesheet" />

@endpush
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <a href="{{route('levels.create')}}"><i class="fa fa-plus-circle text-success">Add new level</i></a>
        </div>
        <div class="bootstrap-data-table-panel">
            <div class="table-responsive">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>SL no</th>
                            <th>Name</th>
                            <th>status</th>
                            <th>description</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($levels as  $level)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$level->name}}</td>
                            <td>{{$level->status}}</td>
                            <td>{{Str::limit($level->description, 50, '...')}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-default btn-flat" href="{{route('levels.edit', $level->id)}}"><i class="fa fa-edit"></i></a>
                                   
                                    <a class="btn btn-danger btn-flat ml-2 btnDelete" href="#DeleteConfirmation"
                                     data-toggle="modal" data-url="{{route('levels.destroy' ,$level->id)}}">
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
    <!-- /# card -->
</div>
<x-modals.delete :title="'Level'"></x-modals.delete>


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

