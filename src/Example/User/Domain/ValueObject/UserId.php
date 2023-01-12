<?php

namespace Src\Example\User\Domain\ValueObject;

final class UserId
{

    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}
