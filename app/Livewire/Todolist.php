<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\todo;

class Todolist extends Component
{
    public $todos;
    public string $todoText = "";

    public function mount(){
        $this->selectTodos();
    }

    public function render()
    {
        return view('livewire.todolist');
    }

    public function addtodo(){
        $todo = new todolist();
        $todo->todo = $this->todoText;
        $todo->complete = false;
        $todo->save();

        $this->todoText = '';
        $this->selectTodos();
    }

    public function toggleTodo($id){
        $todo = todolist::where('id', $id)->first();
        if(!$todo){
            return ;
        } 
        $todo->completed = !$todo->completed;
        $todo->save();
        $this->selectTodos();
    }

    public function deleteTodo($id){
        $todo = todolist::where('id', $id)->first();
        if(!$todo){
            return ;
        }
        $todo->delete();
        $this->selectTodos();
    }

    public function selectTodos(){
        // $this->todos = todolist::get();
    }
}
