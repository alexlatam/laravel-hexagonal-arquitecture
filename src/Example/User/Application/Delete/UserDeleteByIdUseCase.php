<?php

namespace Src\Example\User\Application\Delete;

use Src\Example\User\Domain\Contracts\UserRepositoryInterface;
use Src\Example\User\Domain\Exceptions\UserException;
use Src\Example\User\Domain\ValueObject\UserId;

final class UserDeleteByIdUseCase
{
    private $repository;

    public function __construct(UserRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function __invoke(int $id): array
    {
        $response = $this->repository->deleteById(new UserId($id));
        if (!$response) return $this->exception($id);
        return [
            'message' => 'User deleted successfully',
            'status' => 200
        ];
    }

    private function exception(int $id): void
    {
        throw new UserException("User with id {$id} not found", 404);
    }
}
