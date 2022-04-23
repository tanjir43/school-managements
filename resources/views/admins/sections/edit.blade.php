@extends('layouts.app')

@section('content')

    @include('layouts.bread_crumb', ['title' => Str::ucfirst(request()->segment(3)), 'param1' => request()->segment(1), 'param2' => request()->segment(1)])


    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="{{route('sections.store')}}" method="post">
                      <input type="hidden" name="edit_id" value="{{$section->id}}">
                        @csrf
                        @include('admins.sections.field')
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

