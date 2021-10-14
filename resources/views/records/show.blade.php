@extends('layouts.layout')

@section('title', $records->bookName)




@section('content')

    <div class="card">
        <div class="card-body">
            <h1>{{$records->authorName}}</h1>
            {{$records->bookName}}

        </div>
    </div>

@endsection
