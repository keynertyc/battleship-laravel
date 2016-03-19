<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;

class UsersController extends Controller
{

    public $users = array(
        0=>array('id'=> 1, 'username'=>'user1', 'password'=>'password1'),
        1=>array('id'=> 2, 'username'=>'user2', 'password'=>'password2'),
    );

    public function getLogin(){
        if (Session::has('user')) {
            return redirect('/games/'.Session::get('user')['id']);
        }
        return view('users/login');
    }

    public function login(Request $request) {



        $username = $request->input('username');
        $password = $request->input('password');

        foreach ($this->users as $user) {
            if ($username == $user['username'] && $password == $user['password']) {
                Session::put('user', $user);
                return redirect('/games/'.$user['id']);
            }
        }
        return redirect('login');

    }

    public function logout() {
        Session::flush();
        return redirect('/');
    }
}
