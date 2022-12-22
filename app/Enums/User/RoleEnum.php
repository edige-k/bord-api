<?php

namespace App\Enums\User;

use Spatie\Enum\Laravel\Enum;

final class RoleEnum extends Enum
{
    const SUPER_ADMIN = 'super_admin';
    const DEVELOPER = 'developer';
    const PARTNER = 'partner';
    const CLIENT = 'client';


}
