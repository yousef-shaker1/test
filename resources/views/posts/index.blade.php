{{-- @extends('app') --}}
{{-- @section('content') --}}
<div>
  <a href="{{ route('show_create') }}">add post</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">title</th>
        <th scope="col">author</th>
      </tr>
    </thead>
    <tbody>
       @foreach ($posts as $post)
       <tr>
         <th scope="row">{{ $post->title }}</th>
         <th scope="row">{{ $post->body }}</th>
         <th><a href="{{ route('edit', $post->id) }}">edit</a></th>
         
         <th>
          <form action="{{ route('del', ['id' => $post->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">Delete</button>
        </form></th>
         </tr>
         @endforeach
        </tbody>
        </table>
        </div>
{{-- @endsection --}}