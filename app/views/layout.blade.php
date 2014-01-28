<html>

<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-theme.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/app.css')}}"/>
<body>
    <div class="row">
        @yield('content')
    </div>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/ajax-wrapper.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/constants.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/helper.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/app.js')}}"></script>

</body>
</html>