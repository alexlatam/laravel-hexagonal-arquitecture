<?php

namespace Src\Example\User\Infrastructure\Repositories\Eloquent;

use Src\Example\User\Domain\Contracts\UserRepositoryInterface;
use Src\Example\User\Domain\ValueObject\UserId;
use Src\Example\User\Domain\ValueObject\UserSaveRequest;

final class UserRepository implements UserRepositoryInterface
{
    private $model;

    public function __construct() {
        $this->model = new User();
    }

    public function findAll(): array
    {
        return $this->model->all()->toArray();
    }

    public function findById(UserId $id): ?array
    {
        $response = $this->model->find($id->value());
        return ($response) ? $response->toArray() : null;
    }

    public function deleteById(UserId $id): bool
    {
        return $this->model->where('id', $id->value())->delete();
    }

    public function save(UserSaveRequest $request): ?int
    {
        $response = $this->model->create($request->handler());
        return ($response) ? $response->id : null;
        // return $response->id;
    }
}
