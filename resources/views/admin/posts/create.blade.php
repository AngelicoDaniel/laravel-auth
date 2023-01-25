@extends('layouts.dashboard')
@section('content')
    <div class="text-center">
        <h1>Crea un post</h1>
    </div>

    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf

        <div class="my-4">
            <label class="form-label" for="">Titolo</label>
            <input class="form-control" type="text" name="title">
        </div>

        <div class="my-4">
            <label class="form-label" for="">Body</label>
            <textarea class="form-control" type="text" name="body"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
@endsection
