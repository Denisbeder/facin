<?php

namespace App\Actions;

use App\Models\User;

class UserDelete extends Actionable
{
    public function handle(array $ids = null): ?bool
    {
        return User::whereKey($ids)->delete();
    }
}
