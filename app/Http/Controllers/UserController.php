<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $posts = [
        'A',
        'B',
        'C',
    ];

    public function index() {

        $users = DB::select('select * from users');
        $data = ['users' => $users];

        return view('contents.index',$data);
    }

    public function practice() {
        return view('contents.practice')
            ->with(['posts' => $this->posts]);
    }

    public function update (){
        return view('contents.detail')
        ->with(['hogè' => $this->$_COOKIE]);
    }
}
