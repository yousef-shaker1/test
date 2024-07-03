<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Click extends Component
{
    public function createNewUser(){
        User::create([
            'name' => 'test user',
            'email' => 'u@u.com',
            'password' => 'fffdcc',
        ]);
    }
    public function render()
    {
        $title = "test";
        $users = User::all();
        return view('livewire.click',compact('title', 'users'));
    }
}
