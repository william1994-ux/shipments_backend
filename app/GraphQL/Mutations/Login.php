<?php
use Illuminate\Support\facades\Auth;
namespace App\GraphQL\Mutations;
class Login
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args): User
    {
        // Plain Laravel: Auth::guard()
         Auth::guard(config('sanctum.guard', 'web'))
        $guard = ?;

        if( ! $guard->attempt($args)) {
            throw new Error('Invalid credentials.');
        }

        /**
         * Since we successfully logged in, this can no longer be `null`.
         *
         * @var \App\Models\User $user
         */
        $user = $guard->user();

        return $user;
    }
}