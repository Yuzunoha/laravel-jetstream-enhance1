<?php

namespace App\Models;

class StudentProfile extends ModelBase
{
    protected $fillable = [
        'user_id',
        'student_profile_memo',
    ];
}
