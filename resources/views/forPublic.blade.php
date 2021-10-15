
@extends('layouts.layout')

@section('title', 'Все записи')



@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success mt-3">
            {{ session()->get('success') }}
        </div>
    @endif

    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя автора</th>
            <th scope="col">Название книги</th>
            <th scope="col">Количество книг</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <th scope="row">{{$record -> id}}</th>
                <td>{{$record -> authorName}}</td>
                <td>{{$record -> bookName}}</td>
                <td>{{$record -> amountBooks}}</td>
                <td>


        @endforeach
        </tbody>
    </table>
@endsection

