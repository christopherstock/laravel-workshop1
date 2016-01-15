<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile AS ProfileModel;

class Profile extends Controller
{
    public function index()
    {

        $profiles = ProfileModel::where('name', 'andi')->get();

        return view('profile', ['name' => $profiles]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:1',
        ]);

        $profile          = new ProfileModel();
        $profile->name    = $request->input('name');
        $profile->surname = $request->input('surname');
        $profile->phone   = $request->input('phone');
        $profile->email   = $request->input('email');

        $profile->save();

        return redirect()->action('UsersController@index');
    }
}