<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginComponent extends Component
{
    public string $username = '', $password = '';

    public function login(){
        $this->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        //log in logic
        if($this->isValidUser()){
           session([
               'id' => $this->isValidUser()->id,
               'role_id'=> $this->isValidUser()->role_id
           ]);
           redirect('/cms/dashboard');
        }else{
            session()->flash('message', 'Username & Password not valid.');
        }
    }

    //check user is registered
    public function isValidUser(){
       $users = DB::table('users')
                ->where('username', $this->username)
                ->first();

        if(Hash::check($this->password, $users->password)) {
            return $users;
        } else {
            return false;
        }

    }

    public function render()
    {
        return view('livewire.login-component');
    }
}
