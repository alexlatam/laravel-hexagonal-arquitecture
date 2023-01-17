<?php

namespace Src\Example\Shared\Infrastructure\Helpers;

use Carbon\Carbon;

trait DateHelper
{
    public function getNow(): string
    {
        return Carbon::now()->toDateTimeString();
    }
}
