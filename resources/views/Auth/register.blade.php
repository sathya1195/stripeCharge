@extends('layouts.app')
@section('content')
@if(session()->has('success'))
<div class="alert alert-success">
{{session()->get('success')}}
</div>
@endif
<style>
    .formLable{
        float: left;
       margin-bottom: 10px;
    }
    .card{
        width:70%;
        padding: auto;
        
    }
</style>
<div class="card" style="margin-top: 20px; padding-left:50px;padding-right:50px;">
    <div class="card-body" style="text-align: center;">
    <p>If Account Already exist? <a href="{{route('login')}}">sign In</a></p>
        <h1 id="title" style="text-align: center;"> Sign Up</h1>
        <form method="post" enctype="multipart/form-data" action="{{route('auth.store')}}" >
            @csrf
            <div class="form-group" style="margin-top:30px;">
                <lable for="name" class="formLable">Name:</lable>
                <input type="text" name="name" id="name"   class="form-control @error('name') is-invalid @enderror" value="">
                @if($errors->has('name'))
                 <span class="invalid-feedback">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group" style="margin-top:20px;">
                <lable for="email" class="formLable">Email:</lable>
                <input type="email" name="email" id="email"  value="" class="form-control {{$errors->has('email')?'is-invalid':''
                }}">
                @if($errors->has('email'))
                    <span class="invalid-feedback">
                            <strong>{{$errors->first('email')}}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group" style="margin-top:20px;">
                <lable for="password" class="formLable">Password:</lable>
                <input type="password" name="password" id="password"  value=""  class="form-control {{$errors->has('password')?'is-invalid':''
                }}">
                @if($errors->has('password'))
                    <span class="invalid-feedback">
                            <strong>{{$errors->first('password')}}</strong>
                        </span>
                    @endif
            </div>  
            
            <div class="form-group" style="margin-top: 20px;">
            <button class="btn btn-success" type="submit"> Submit</button>
            </div>
        </form>

    </div>

</div>
@endsection