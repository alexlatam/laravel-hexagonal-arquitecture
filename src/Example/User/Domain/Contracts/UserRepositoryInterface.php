<?php

namespace Src\Example\User\Domain\Contracts;

use Src\Example\User\Domain\ValueObject\UserId;
use Src\Example\User\Infrastructure\Repositories\Eloquent\User;

interface UserRepositoryInterface
{
    public function findById(UserId $id): ?array;
    public function findAll(): array;
    // public function delete(int $id): User;
}
