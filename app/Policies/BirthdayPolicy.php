<?php

namespace App\Policies;
use App\Models\Birthday;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BirthdayPolicy
{
    public function modify (User $user, Birthday $birthday): Response
    {
        return $user->id === $birthday->user_id
        ? Response::allow()
        : Response::deny('You do not own this birthday!');
    }
    public function __construct()
    {
        //
    }
}
