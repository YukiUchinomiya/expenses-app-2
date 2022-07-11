<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index() {
        $users = User::latest()->get();

        return view('contents.index')
        ->with(['users' => $users]);
    }

    public function update (){
        $users = DB::select('select * from users');

        return view('contents.index',$users);
    }

    public function practice() {
        return view('contents.practice')
            ->with(['posts' => $this->posts]);
    }
}
