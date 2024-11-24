<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function createUser()
    {
        User::create([
            'name' => 'Your Name',
            'email' => 'email@example.com',
            'password' => Hash::make('password123')
        ]);

        return 'User created successfully!';
    }
}