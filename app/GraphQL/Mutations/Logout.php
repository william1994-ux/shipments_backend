<?php
use Illuminate\Support\facades\Auth;
namespace App\GraphQL\Mutations;
class Logout
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args): ?User
    {
        // Plain Laravel: Auth::guard()
         Auth::guard(config('sanctum.guard', 'web'))
        $guard = ?;

        /** @var \App\Models\User|null $user */
        $user = $guard->user();
        $guard->logout();

        return $user;
    }
}