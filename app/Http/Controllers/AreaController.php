<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller as BaseController;

class AreaController extends BaseController {
    public function index() {
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user))
            return view('login');
        
        return view("profilo")->with("username", $user->username)->with("nome", $user->nome)->with("cognome", $user->cognome)->with("email", $user->email);
    }
}

?>