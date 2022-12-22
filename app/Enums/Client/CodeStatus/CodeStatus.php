<?php

namespace App\Enums\Client\CodeStatus;

use Spatie\Enum\Laravel\Enum;

final class CodeStatus extends Enum
{
    const USED = 'used';
    const NOT_USED='not_used';
}
