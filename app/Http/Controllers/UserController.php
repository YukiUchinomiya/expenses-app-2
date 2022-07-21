<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::oldest()
            ->get();

        return view('contents.index')
            ->with(['users' => $users]);
    }

    public function create (UserRequest $request)
    {
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

    public function detail(User $user)
    {
        return view('contents.detail')
            ->with(['user' => $user]);
    }

    public function update(UserRequest $request, User $user)
    {
        //入力値で更新
        $user->category = $request->category;
        $user->price = $request->price;
        $user->note = $request->note;
        $user->save();

        return redirect()
            ->route('contents.index');
    }

    public function delete(User $user)
    {
        $user->delete();

        return view('contents.delete')
            ->with(['user' => $user]);
    }

    public function practice()
    {
        return view('contents.practice')
            ->with(['posts' => $this->posts]);
    }
}
