@extends('layouts.app')

@section('content')

    @include('layouts.bread_crumb', ['title' => Str::ucfirst(request()->segment(3)), 'param1' => request()->segment(1), 'param2' => request()->segment(1)])

    @include('admins.class_routings.header')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="{{route('classRoutings.store')}}" method="post">

                        @csrf
                        @include('admins.class_routings.field')
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


