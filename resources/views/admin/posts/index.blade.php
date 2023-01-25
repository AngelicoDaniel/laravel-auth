@extends('layouts.dashboard')
@section('content')

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">body</th>
            <th scope="col">actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>icone</td>
                </tr>
            @endforeach
        </tbody>
      </table>

      <div class="d-flex justify-content-center">
          {{ $posts->links() }}
      </div>
@endsection
