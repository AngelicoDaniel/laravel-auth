@extends('layouts.dashboard')
@section('content')

    <a href="{{route('admin.posts.create')}}">Crea nuovo post</a>

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
                    <td>
                        <a href="{{route('admin.posts.show', $post->id)}}">
                            {{$post->title}}
                        </a>
                    </td>
                    <td>{{$post->body}}</td>
                    <td>
                        <a href="{{route('admin.posts.edit', $post->id)}}">
                            Edit
                        </a>
                        {{-- <a href="{{route('admin.posts.delete')}}">
                            Delete
                        </a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

      <div class="d-flex justify-content-center">
          {{ $posts->links() }}
      </div>
@endsection
