<form action="{{ route('post.store') }}" method='post'>
  @csrf
  <input type='text' name='title'>
  <input type='text' name='body'>
  <button type='submit'>save</button>
</form>