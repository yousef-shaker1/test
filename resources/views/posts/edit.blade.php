<form action="{{ route('post.update', $posts->id) }}" method='post'>
  @csrf
  @method('PUT') 
 <input type='hidden' name='id' value='{{ $posts->id }}'>
 <input type='text' name='title' value='{{ $posts->title }}'>
  <input type='text' name='body' value='{{ $posts->body }}'>
  <button type='submit'>save</button>
</form>