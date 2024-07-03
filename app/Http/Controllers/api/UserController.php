<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Userresponce;
use App\Http\Controllers\api\ApiRequestuserTrait;

class UserController extends Controller
{
    use ApiRequestuserTrait;
    public function index()
    {
        $users = Userresponce::collection(User::all()); 
        // return response($users, 200, ['ok']);
        return $this->apiresponse($users, 200, 'ok');
    }
    public function show($id)
    {
        $users = new Userresponce(User::find($id)); 
        return $this->apiresponse($users, 200, 'ok');
    }
}
