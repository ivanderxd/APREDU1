<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    @laravelPWA

</head>
<body style="background-color:#cae7b7;">

    @include('sweetalert::alert')

    <div id="app">
        
    @include('navbar.navbar')       
            

    <div class="container page">        
        @if (isset($success))
        <div class="row justify-content-end">
            <div class="col-8 " >                
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                {{$success}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            </div>
        </div>
        @endif
        @yield('content')
    </div>
</div>


    <!-- Scripts -->
    
   
    <script src="{{ asset('js/app.js') }}"></script>
   
    @yield('scripts')
    @include('footer.footer')
</body>
</html>

