<?php

namespace App\Actions;

use App\Models\User;

class UserDeleteAll extends Actionable
{
    public function handle(array $exceptIds = null): bool
    {
        return User::whereKeyNot($exceptIds)->delete();
    }
}
