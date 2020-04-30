<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Symphony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function fetchUsers()
    {
        return response()->json([ "users" => User::all() ], 200);
    }
}
