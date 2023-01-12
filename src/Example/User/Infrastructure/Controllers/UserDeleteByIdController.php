<?php

namespace Src\Example\User\Infrastructure\Controllers;

use Src\Example\User\Application\Find\UserDeleteByIdUseCase;
use Src\Example\User\Infrastructure\Repositories\Eloquent\User;

final class UserDeleteByIdController
{
    public $deleteByIdUseCase;
    public $id;

    public function __construct(UserDeleteByIdUseCase $deleteByIdUseCase, int $id) {
        $this->deleteByIdUseCase = $deleteByIdUseCase;
        $this->id = $id;
    }

    public function __invoke(): User
    {
        // Retornamos el metodo __invoke del caso de uso
        return $this->deleteByIdUseCase->__invoke($this->id);
    }
}
