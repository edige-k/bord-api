<?php

namespace App\Enums\User;

use Spatie\Enum\Laravel\Enum;

final class StatusEnum extends Enum
{
    const ACTIVATE = 'ACTIVED_AT';
    const BLOCK = 'BLOCKED_AT';
    const NULL = NULL;
}

