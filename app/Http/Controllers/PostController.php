<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

class PostController extends Controller
{
    public function index(){
        $users = \App\Models\User::all();
        return $users;

    }

    public function create(){
        $newUser = new \App\Models\User;
        $newUser->name = 'John Doe';
        $newUser->email = 'john@example.com';
        $newUser->save();
        if($newUser){
            return 'data successfully inserted';
        }
    }


    public function update(){
        $userToUpdate = \App\Models\User::find(2);

        // Update user details
        $userToUpdate->name = 'john';
        $userToUpdate->save();
        if($userToUpdate){
            return 'data successfully Updated';
        }
    }

    public function delete(){
        $userToDelete = \App\Models\User::find(2);
        $userToDelete->delete();
        if($userToDelete){
            return 'data successfully delete';
        }
    }

    public function add1(){

        return view('home');
    }
}
