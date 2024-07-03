<div>
    <input type='text' wire:model="todoText" wire:keydown.enter="addTodo">
    <button wire:click="addTodo">add</button>
    @if(count($todos) == 0)
        <p>There are not todos</p>
    @endif
    @foreach ($todos as $index => $todo)
        <input type='checkbox' wire:change="toggleTodo({{ $todo->id }})">
        <label {{ $todo->completed ? 'line-through' : '' }}>{{ $todo->todo }}</label>
        <button wire:click='deleteTodo({{ $todo->id }})'></button>

    @endforeach
</div>
