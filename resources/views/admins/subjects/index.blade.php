@extends('layouts.app')

@section('content')

    @include('admins.academics.header')
  
    @include('components.alerts.notification')

    @include('admins.subjects.table')
@endsection
