<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ str_replace('_', ' ', config('app.name', 'Jambasangsang')) }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{ asset('jambasangsang/assets/css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('jambasangsang/assets/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('jambasangsang/assets/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('jambasangsang/assets/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('jambasangsang/assets/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('jambasangsang/assets/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('jambasangsang/assets/css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('jambasangsang/assets/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('jambasangsang/assets/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('jambasangsang/assets/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('jambasangsang/assets/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @stack('style')
</head>

<body>
    <div id="app">

        @auth
            {{-- Sidebar Section --}}
            @include('layouts.sidebar')

            {{-- Header Section --}}
            @include('layouts.navigation')
        @endauth


        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <section id="main-content">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error )
                                    <x-alerts.alert :error="$error"></x-alerts.alert>
                            @endforeach
                        @endif
                    @yield('content')
                    </section>
                </div>
            </div>
        </div>


        <!-- jquery vendor -->
        <script src="{{ asset('jambasangsang/assets/js/lib/jquery.min.js') }}"></script>
        <script src="{{ asset('jambasangsang/assets/js/lib/jquery.nanoscroller.min.js') }}"></script>
        <!-- nano scroller -->
        <script src="{{ asset('jambasangsang/assets/js/lib/menubar/sidebar.js') }}"></script>
        <script src="{{ asset('jambasangsang/assets/js/lib/preloader/pace.min.js') }}"></script>
        <!-- sidebar -->

        <script src="{{ asset('jambasangsang/assets/js/lib/bootstrap.min.js') }}"></script>
        <script src="{{ asset('jambasangsang/assets/js/scripts.js') }}"></script>
        <!-- bootstrap -->

        <script src="{{ asset('jambasangsang/assets/js/lib/calendar-2/moment.latest.min.js') }}"></script>
        <script src="{{ asset('jambasangsang/assets/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
        <script src="{{ asset('jambasangsang/assets/js/lib/calendar-2/pignose.init.js') }}"></script>


        <script src="{{ asset('jambasangsang/assets/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
        <script src="{{ asset('jambasangsang/assets/js/lib/weather/weather-init.js') }}"></script>
        <script src="{{ asset('jambasangsang/assets/js/lib/circle-progress/circle-progress.min.js') }}"></script>
        <script src="{{ asset('jambasangsang/assets/js/lib/circle-progress/circle-progress-init.js') }}"></script>
        <script src="{{ asset('jambasangsang/assets/js/lib/chartist/chartist.min.js') }}"></script>
        <script src="{{ asset('jambasangsang/assets/js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('jambasangsang/assets/js/lib/sparklinechart/sparkline.init.js') }}"></script>
        <script src="{{ asset('jambasangsang/assets/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('jambasangsang/assets/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('jambasangsang/assets/js/dashboard2.js') }}"></script>
            <script src="{{asset('js/global.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

            <script>
                //add more functionality here

                function get_level_grades(level_id){
                    $('#grade_id').empty();
                    $('#grade_id').append($('<option>').text("Select Grade").attr('value',""));
                    $.get("{{ route('grades.index')}}", {
                        level_id:level_id
                    }, function (data){
                        $.each(data, function (i, value){
                            $('#grade_id').append($('<option>').text(value.name).attr('value',value.id));
                        })
                    });
                }

                function get_grade_classes(grade_id){
                    $('#class_id').empty();
                    $('#class_id').append($('<option>').text("Select Class").attr('value',""));

                    $.get("{{ route('classes.index') }}", {
                        grade_id:grade_id
                    }, function (data){
                        $.each(data, function (index, value){
                            $('#class_id').append($('<option>').text(value.name).attr("value",value.id));
                        });
                    });
                }

                function get_class_subjects(class_id){
                    $('#subject_id').empty();
                    $('#subject_id').append($('<option>').text('Select Subjects').attr('value',""));

                    $.get("{{ route('subjects.index')}}", {
                        class_id:class_id
                    }, function (data){
                        $.each(data, function (index, value){
                            $('#subject_id').append($('<option>').text(value.subject.name).attr("value",value.subject.id));
                        });
                    });
                }

                function get_shift_times(shift_id){
                    $('#time_id').empty();
                    $('#time_id').append($('<option>').text('Select times').attr('value',""));

                    $.get("{{ route('times.index')}}", {
                        shift_id:shift_id
                    }, function (data){
                        $.each(data, function (index, value){
                            $('#time_id').append($('<option>').text(value.start_from + ' to ' + value.end_from).attr("value",value.id));
                        });
                    });
                }


            </script>


            <script>
            $(document).ready(function() {
                $('#summernote').summernote();
            });
          </script>

          <script>
              setTimeout(function(){
                $('#alert').slideUp();
              },4000);
          </script>
        @stack('script')
</body>

</html>
