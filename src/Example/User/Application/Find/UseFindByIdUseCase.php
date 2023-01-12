<?php

namespace Src\Example\User\Application\Find;

use Src\Example\User\Domain\Contracts\UserRepositoryInterface;
use Src\Example\User\Domain\Exceptions\UserException;
use Src\Example\User\Domain\ValueObject\UserId;

final class UseFindByIdUseCase
{
    private $repository;

    public function __construct(UserRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function __invoke(int $id): ?array
    {
        $response = $this->repository->findById( new UserId($id) );

        if (!$response) return $this->exception($id);
        return $response;
    }

    private function exception(int $id): void
    {
        throw new UserException("User with id {$id} not found", 404);
    }
}
