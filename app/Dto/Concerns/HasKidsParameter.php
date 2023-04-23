<?php

namespace App\Dto\Concerns;

use App\Casts\ContextualBooleanCast;
use Spatie\LaravelData\Attributes\Validation\BooleanType;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Optional;

trait HasKidsParameter
{
    use PreparesData;

    #[BooleanType, WithCast(ContextualBooleanCast::class)]
    public bool|Optional $kids = false;
}
