<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h6>{{Str::ucfirst(request()->segment(3))}} <span class="ml-2 text-success">({{\App\Models\Session::count() }})</span></h6>
            <a href="{{route('sessions.create')}}"><i class="fa fa-plus-circle text-success pull-right">Add new session</i></a>
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
                            <th>is_Current</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($sessions as  $session)

                            <td>{{$loop->iteration}}</td>
                            <td>{{$session->name}}</td>
                            <td {{Helper::getStatusClass($session->status)}}>{{Helper::getStatusValue($session->status)}}</td>
                            <td>{{$session->code}}</td>
                            <td>{{$session->current_session==1 ? "Yes" :"No"}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-default btn-flat" href="{{route('sessions.edit', $session->id)}}"><i class="fa fa-edit"></i></a>

                                    <a class="btn btn-danger btn-flat ml-2 btnDelete" href="#DeleteConfirmation"
                                     data-toggle="modal" data-url="{{route('sessions.destroy' ,$session->id)}}"
                                       data-session="{{$session->name}}">
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
<x-Modals.delete :title="'Session'"></x-Modals.delete>
