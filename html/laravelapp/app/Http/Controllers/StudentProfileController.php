<?php

namespace App\Http\Controllers;

use App\Models\StudentProfile;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class StudentProfileController extends BaseController
{
    public function update()
    {
        $sp = StudentProfile::where('user_id', Auth::id())->first();
        $sp->update(['student_profile_memo' => 'updated!!!']);

        return [Auth::user()->studentProfile, $sp];
    }
}
