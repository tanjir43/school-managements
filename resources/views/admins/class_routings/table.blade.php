
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h6>{{Str::ucfirst(request()->segment(3))}}</h6>
            <a href="{{route('classRoutings.create')}}"><i class="fa fa-plus-circle text-success pull-right">Add new Class routings</i></a>
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
                            <th>description</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($classRoutings as  $classRouting)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$classRouting->name}}</td>
                                <td {{Helper::getStatusClass($classRouting->status)}}>{{Helper::getStatusValue($classRouting->status)}}</td>
                                <td>{!!Str::limit($classRouting->description, 50, '...')!!}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-default btn-flat" href="{{route('classRoutings.edit', $classRouting->id)}}"><i class="fa fa-edit"></i></a>

                                        <a class="btn btn-danger btn-flat ml-2 btnDelete" href="#DeleteConfirmation"
                                           data-toggle="modal" data-url="{{route('classRoutings.destroy' ,$classRouting->id)}}">
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
<x-Modals.delete :title="'Class Routings'"></x-Modals.delete>


