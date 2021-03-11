<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="banner mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2">
                        <div class="banner-title">
                            <h2>{{$name ?? 'Home'}}</h2>
                            @yield('actions')
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- banner End -->
        
        @yield('form')
        
        <div class="status-box">
            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2">
                        @yield('status')
                    </div>
                </div>
            </div>
        </div><!-- status box End -->
    </div> <!-- main -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @yield('script')
</body>
</html>