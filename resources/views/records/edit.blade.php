@extends('layouts.layout')

@section('title', 'Добавить запись')



@section('content')
    <div class="row">
        <div class="col-lg-6 mx-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{route('records.update', $records)}}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="record-authorName">Имя автора</label>
                    <input type="text" name="authorName" class="form-control"
                           value="{{$records->authorName}}" id="record-authorName">
                </div>

                <div class="form-group">
                    <label for="form-bookName">Название книги</label>
                    <textarea class="form-control" name="bookName"   id="form-bookName" rows="3">{{$records->bookName}}</textarea>
                </div>

                <div class="form-group">
                    <label for="record-amountBooks">Колличество книг</label>
                    <input type="text" name="amountBooks" value="{{$records->amountBooks}}" class="form-control" id="record-amountBooks">
                </div>

                <button type="submit" class="btn btn-success">Отредактировать</button>
            </form>
        </div>
    </div>
@endsection
