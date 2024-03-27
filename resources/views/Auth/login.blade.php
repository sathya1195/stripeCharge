<html>
    <head>
        <meta charset="UTF-8">
        <meta name="users list" content="widh=device-with,initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Product Purchase</title>
    </head>
    
    <body>
        <div class="container">
        @if(session()->has('success'))
        <div class="alert alert-success">
        {{session()->get('success')}}
        </div>
        @endif
                @if(session()->has('errors'))
        <div class="alert alert-danger">
        {{session()->get('errors')}}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
            <p>If Account Not exist? <a href="{{route('auth.register')}}">sign Up</a></p>
                <h4 style="text-align: center;">SignIn</h4>
                <form method="post" action="{{route('authendicate')}}">
                    @csrf
                <div class="form-group" style="margin-top:30px;">
                    <lable for="email" class="formLable">User Name:</lable>
                    <input type="text" name="email" id="email"   class="form-control @error('email') is-invalid @enderror" value="">
                    @if($errors->has('email'))
                    <span class="invalid-feedback">
                            <strong>{{$errors->first('email')}}</strong>
                        </span>
                    @endif
                </div>
                   
                <div class="form-group" style="margin-top:30px;">
                    <lable for="password" class="formLable">Password:</lable>
                    <input type="password" name="password" id="password"   class="form-control @error('password') is-invalid @enderror" value="">
                    @if($errors->has('password'))
                    <span class="invalid-feedback">
                            <strong>{{$errors->first('password')}}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-success" style="margin-top: 30px;">Submit</button>

                </form>
              
                

            </div>

        </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>