<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class ProfileController extends BaseController
{
    public function index()
    {
        return ['hello', Auth::id()];
    }
}
