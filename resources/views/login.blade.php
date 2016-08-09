@extends('layouts.app')

@section('content')

<div class="container">

    <link rel="stylesheet" href="{{ URL::asset('css/my_css.css') }}"/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="first">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="col-sm-12 form-group text-center">Welcome to Ovi's Library</h1>
                   <!-- <div class="col-sm-12">
                        <div class="form-group text-center">
                            <p>Already a user?</p>
                            <a href = 'sign_in.html?'>Log In</a>
                        </div></br>
                        <div class="form-group text-center">
                            <p>Not Yet Registered?!</p>
                            <a href = 'register.php?'>Register</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
