<?php

namespace Src\Example\User\Application\Find;

use Src\Example\User\Domain\Contracts\UserRepositoryInterface;
use Src\Example\User\Infrastructure\Repositories\Eloquent\User;

final class UserDeleteByIdUseCase
{
    private $repository;

    public function __construct(UserRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function __invoke(int $id): User
    {
        return $this->repository->delete($id);
    }
}
