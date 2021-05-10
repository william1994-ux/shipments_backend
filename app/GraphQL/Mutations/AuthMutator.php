<?php 

namespace App\GraphQL\Mutations; 
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\facades\Auth;


class AuthMutator {

    public function login($root, array $args) {

        $credantials = Arr::only($args, ['email', 'password']); 

        if(Auth::once($credantials)) {
            $token = Str::random(30); 
            $user = auth()->user(); 
            $user->api_token = $token; 
            $user->save(); 
            return $token; 
        }
        return null; 
    }
}