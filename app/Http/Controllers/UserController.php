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

    public function create (Request $request){
        //簡易的なバリデーション
        $request->validate([
            'category' => 'required',
            'price' => 'required',
        ],
        [
            'category.required' => 'タイトルを入力してください',
            'price.required' => '本文を入力してください',
        ]
    );

        //インスタンス生成
        $user = new User();
        //入力値をinsert
        $user->category = $request->category;
        $user->price = $request->price;
        $user->note = $request->note;
        $user->save();

        return redirect()
            ->route('contents.index');
    }

    public function detail(User $user){

        return view('contents.detail')
            ->with(['user' => $user]);
    }

    public function update(Request $request, User $user){
        //簡易的なバリデーション
        $request->validate([
            'category' => 'required',
            'price' => 'required',
        ],
        [
            'category.required' => 'タイトルを入力してください',
            'price.required' => '本文を入力してください',
        ]
    );

        //入力値で更新
        $user->category = $request->category;
        $user->price = $request->price;
        $user->note = $request->note;
        $user->save();

        return redirect()
            ->route('contents.index');
    }

    public function delete(User $user){

        return view('contents.delete')
            ->with(['user' => $user]);
    }

    public function practice() {
        return view('contents.practice')
            ->with(['posts' => $this->posts]);
    }
}
