@extends('layouts.app')

@section('content')

    @include('layouts.bread_crumb', ['title' => Str::ucfirst(request()->segment(3)), 'param1' => request()->segment(1), 'param2' => request()->segment(1)])

    @include('admins.academics.header')

    {{-- <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="#" method="post">
                        @include('admins.levels.field')
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    @include('admins.levels.table')
@endsection
