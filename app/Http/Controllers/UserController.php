<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['username' => 'admin', 'full_name' => 'Katarina', 'role' => 'Administrator'],
            ['username' => 'ceo', 'full_name' => 'Luxxana', 'role' => 'Ceo'],
            ['username' => 'manager', 'full_name' => 'Janna', 'role' => 'Manager'],
            ['username' => 'director', 'full_name' => 'Lissandra', 'role' => 'Director'],
            ['username' => 'accountant', 'full_name' => 'Irelia', 'role' => 'Accountant'],
        ];

        return view('users', compact('users'));
    }
}