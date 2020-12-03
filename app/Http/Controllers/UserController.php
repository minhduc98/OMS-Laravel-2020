<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $title = 'User';
        $role = Auth::user()->userType;
        if ($role == 'admin' ) {
            $users = User::all();
        } else {
            $users = User::where('userType', 'student')->get();
        }
        return view('user', compact('users', 'title'));
    }

    public function edit($id)
    {
        if ($id != 'new') {
            $title = 'Edit User';
            $user = User::findOrFail($id);
            return view('user_edit', compact('id', 'title', 'user'));
        } else {
            $title = 'New User';
            return view('user_edit', compact('id', 'title'));
        }
    }

    public function save(Request $request)
    {
        $title = 'Edit User';
        if ($request->id != 'new') {

            DB::transaction(function () use ($request) {

                $user = User::find($request->id);

                $user->username = $request->user_name;
                $user->userType = $request->user_type;

                if ($request->password != ''){
                    $user->password = password_hash($request->password, PASSWORD_DEFAULT);
                }

                $user->save();
            });
        } else {
            DB::transaction(function () use ($request) {
                $data = [
                    'username' => $request->user_name,
                    'userType' => $request->user_type,
                    'password' => password_hash($request->password, PASSWORD_DEFAULT),
                ];
                $user = User::create($data);
            });
        }

        return redirect()->action('UserController@index');
    }

    public function delete(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();

        return redirect()->action('UserController@index');
    }
}
