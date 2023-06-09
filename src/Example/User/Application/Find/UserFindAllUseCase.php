<?php

namespace Src\Example\User\Application\Find;

use Src\Example\User\Domain\Contracts\UserRepositoryInterface;

final class UserFindAllUseCase
{
    private $repository;

    public function __construct(UserRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function __invoke(): array
    {
        return $this->repository->findAll();
    }
}
