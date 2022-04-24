@extends('layouts.app')

@push('style')
<link href="{{ asset('jambasangsang/assets/css/lib/select2/select2.min.css') }}" rel="stylesheet">

@endpush

@section('content')

    @include('layouts.bread_crumb', ['title' => Str::ucfirst(request()->segment(3)), 'param1' => request()->segment(1), 'param2' => request()->segment(1)])


    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="{{route('times.store')}}" method="post">
                      <input type="hidden" name="edit_id" value="{{$time->id}}">
                        @csrf
                        @include('admins.times.field')
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')

     <script src="{{ asset('jambasangsang/assets/js/lib/select2/select2.full.min.js') }}"></script>
     <script src="{{ asset('jambasangsang/assets/js/lib/form-validation/jquery.validate.min.js') }}"></script>
     <script src="{{ asset('jambasangsang/assets/js/lib/form-validation/jquery.validate-init.js') }}"></script>
     <script src="{{ asset('jambasangsang/assets/js/lib/bootstrap.min.js') }}">
    </script><script src="{{ asset('jambasangsang/assets/js/scripts.js') }}"></script>

@endpush
