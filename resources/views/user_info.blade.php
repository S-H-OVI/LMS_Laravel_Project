@extends('layouts.app')

@section('content')
<div class="container">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
    {{--<link rel="stylesheet" href="{{ URL::asset('css/mystyle.css') }}"/>--}}
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h1>User's Information</h1></div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Password</td>
                            <td>Type</td>
                            <td>Action</td>
                        </tr>

                        @foreach($imo as $usr)
                            <tr>
                                <td>{{$usr->name}}</td>
                                <td>{{$usr->email}}</td>
                                <td>{{$usr->password}}</td>
                                <td>{{$usr->type}}</td>
                                {{--<td>{{$bk->isbn_no}}</td>--}}
                                {{--<td>{{$bk->barcode_no}}</td>--}}
                                {{--<td>{{$bk->copies}}</td>--}}
                                <td>
                                    <a href="{{ url('') }}">Delete</a>
                                <td>
                            </tr>

                            @endforeach

                    </table>
                    <input type=button onClick="window.location='{{ url("insert_book") }}'" value='Add User!'>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
