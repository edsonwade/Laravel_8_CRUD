<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile($profile)
    {
        $name = "Vanilson Muhongo";

        return $profile = $name;
    }
}
