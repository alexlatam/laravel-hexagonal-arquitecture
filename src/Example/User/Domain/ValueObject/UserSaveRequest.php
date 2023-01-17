<?php

namespace Src\Example\User\Domain\ValueObject;

final class UserSaveRequest
{
    private array $value;
    private string $date;

    public function __construct(?array $value, string $date)
    {
        $this->value = $value;
        $this->date = $date;
    }

    public function value(): ?array
    {
        return $this->value;
    }

    public function date(): string
    {
        return $this->date;
    }

    public function password(): string
    {
        return password_hash($this->value()['password'], PASSWORD_DEFAULT);
    }

    public function handler(): array
    {
        return array_merge($this->value(), [
            'password'   => $this->password(),
            'created_at' => $this->date(),
            'updated_at' => $this->date()
        ]);
    }
}
