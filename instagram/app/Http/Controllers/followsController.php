<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class followsController extends Controller
{
    //
    public function store(User $user)
    {
        # code...
        return $user->username;
    }
}
