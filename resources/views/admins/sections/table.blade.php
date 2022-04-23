{{--@push('style')--}}
{{--<link href="{{ asset('jambasangsang/assets/css/lib/data-table/buttons.bootstrap.min.css')}}" rel="stylesheet" />--}}

{{--@endpush--}}
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h6>{{Str::ucfirst(request()->segment(3))}} <span class="ml-2 text-success">({{\App\Models\Section::count() }})</span></h6>
            <a href="{{route('sections.create')}}"><i class="fa fa-plus-circle text-success pull-right">Add new sections</i></a>
        </div>
        <div class="card-body mt-2">
        <div class="bootstrap-data-table-panel">
            <div class="table-responsive">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>SL no</th>
                            <th>Name</th>
                            <th>status</th>
                            <th>code</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($sections as  $section)

                            <td>{{$loop->iteration}}</td>
                            <td>{{$section->name}}</td>
                            <td {{Helper::getStatusClass($section->status)}}>{{Helper::getStatusValue($section->status)}}</td>
                            <td>{{$section->code}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-default btn-flat" href="{{route('sections.edit', $section->id)}}"><i class="fa fa-edit"></i></a>

                                    <a class="btn btn-danger btn-flat ml-2 btnDelete" href="#DeleteConfirmation"
                                     data-toggle="modal" data-url="{{route('sections.destroy' ,$section->id)}}">
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
<x-Modals.delete :title="'Section'"></x-Modals.delete>


{{--@push('script')--}}
{{--<script src="{{ asset('jambasangsang/assets/js/lib/data-table/datatables.min.js ')}}"></script>--}}
{{--<script src="{{ asset('jambasangsang/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>--}}
{{--<script src="{{ asset('jambasangsang/assets/js/lib/data-table/buttons.flash.min.js')}}"></script>--}}
{{--<script src="{{ asset('jambasangsang/assets/js/lib/data-table/jszip.min.js')}}"></script>--}}
{{--<script src="{{ asset('jambasangsang/assets/js/lib/data-table/pdfmake.min.js')}}"></script>--}}
{{--<script src="{{ asset('jambasangsang/assets/js/lib/data-table/vfs_fonts.js')}}"></script>--}}
{{--<script src="{{ asset('jambasangsang/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>--}}
{{--<script src="{{ asset('jambasangsang/assets/js/lib/data-table/buttons.print.min.js')}}"></script>--}}
{{--<script src="{{ asset('jambasangsang/assets/js/lib/data-table/datatables-init.js')}}"></script>--}}
{{--@endpush--}}

