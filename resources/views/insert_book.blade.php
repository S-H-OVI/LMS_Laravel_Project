@extends('layouts.app')

@section('content')
<div class="container">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/mystyle.css') }}"/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h1>Add Book Information</h1></div>

                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br/>
                            @endforeach
                            <span class="crossBtn"></span>
                        </div>
                    @endif
                    <form action="{{url('/bookpath')}}" method="post">
                        {!! csrf_field() !!}
                        Book Name/Title:
                        <input type="varchar" name="book_name1"></br>
                        Author:
                        <input type="text" name="author"></br>
                        Edition:
                        <input type="varchar" name="edition"><br>
                        Publisher:
                        <input type="text" name="publisher"><br>
                        ISBN No:
                        <input type="varchar" name="isbn_no"></br>
                        Barcode No:
                        <input type="varchar" name="barcode_no"></br>
                        Copies:
                        <input type="int" name="copies"><br>
                        <br>
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
