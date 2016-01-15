<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Profile AS ProfileModel;

class UsersController extends Controller
{
    //
    public function index()
    {

        $usersArray = ProfileModel::all()->toArray();

        return view('users', array('users' => $usersArray));
    }
}
