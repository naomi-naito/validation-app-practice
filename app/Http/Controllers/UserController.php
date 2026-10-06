<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        User::create($validated);
        return view('register_success'); 
    }
    public function create()
    {
        return view('register');  
    }
}
