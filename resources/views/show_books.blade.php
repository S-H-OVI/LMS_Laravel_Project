@extends('layouts.app')

@section('content')
<div class="container">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
    {{--<link rel="stylesheet" href="{{ URL::asset('css/mystyle.css') }}"/>--}}
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h1>Books Information<h1></div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>Title</td>
                            <td>Author</td>
                            <td>Edition</td>
                            <td>Publisher</td>
                            <td>Isbn_no</td>
                            <td>Barcode_no</td>
                            <td>Copies</td>
                            <td>Action</td>
                        </tr>

                        @foreach($ovi as $bk)
                            <tr>
                                <td>{{$bk->title}}</td>
                                <td>{{$bk->author}}</td>
                                <td>{{$bk->edition}}</td>
                                <td>{{$bk->publisher}}</td>
                                <td>{{$bk->isbn_no}}</td>
                                <td>{{$bk->barcode_no}}</td>
                                <td>{{$bk->copies}}</td>
                                <td>
                                    <a href="{{ url('') }}">Delete</a>
                                    <a href="{{ url('') }}">Update</a>
                                <td>
                            </tr>

                            @endforeach

                    </table>
                    <input type=button onClick="window.location='{{ url("insert_book") }}'" value='Add Books!'>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
