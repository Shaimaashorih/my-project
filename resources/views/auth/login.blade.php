<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{URL::asset('master/image/logo.png')}}">
    <title>HR SYSTEM</title>
    <link rel="stylesheet" href="{{URL::asset('master/boot/css/bootstrap.css')}}">
    <script src="{{URL::asset('master/boot/js/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="{{URL::asset('master/css/main.css')}}">
</head>
<body>
    
    <div class="all">
        <header></header>

        <div class="all-data">

            <!-- ---------logo-------- -->
            <img src="{{ URL::asset('master/images/logo.png')}}" class="img1">
            <!-- -------form---------- -->
            <form  method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <input type="text" name="email" placeholder="Email" autocomplete="off" class=" @error('email') is-invalid @enderror">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                <hr>
                <input type="password" name="password" placeholder="PASSWORD" class=" @error('password') is-invalid @enderror">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                <hr>
                <input type="submit" value="Sign in">

            </form>

        </div>
       
        <footer></footer>
    </div>
   

</body>
</html>