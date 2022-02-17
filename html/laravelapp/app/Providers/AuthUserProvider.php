<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Auth\EloquentUserProvider;

class AuthUserProvider extends EloquentUserProvider
{
    public function retrieveById($identifier)
    {
        return User::with(['studentProfile',])->find($identifier);
    }
}
