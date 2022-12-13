<?php

namespace App\Enums\News;

use Spatie\Enum\Laravel\Enum;

final class NewsStatusEnum extends Enum
{
    const confirmed = 1;
    const notconfirmed = 2;
}
