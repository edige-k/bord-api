<?php


namespace App\Services\User;


use App\Models\User;

class AssignRoleAction
{
    public function run(User $user,$roles){
        $user->assignRole($roles);
    }
}