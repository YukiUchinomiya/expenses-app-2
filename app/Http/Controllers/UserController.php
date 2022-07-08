<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $posts = [
        'A',
        'B',
        'C',
    ];

    public function index() {

        //WIPデータ取得不備調査中
        // $user = User::all();

        return view('contents.index');
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
