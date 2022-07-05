<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $posts = [
        'A',
        'B',
        'C',
    ];

    public function index() {
        return view('contents.index');
    }

    public function practice() {
        return view('contents.practice')
            ->with(['posts' => $this->posts]);
    }
}
