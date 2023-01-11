<?php

namespace Src\Example\User\Infrastructure\Controllers;

use Src\Example\User\Application\Find\UserFindAllUseCase;

final class UserFindAllController
{
    public $findAllUseCase;

    public function __construct(UserFindAllUseCase $findAllUseCase) {
        $this->findAllUseCase = $findAllUseCase;
    }

    public function __invoke(): array
    {
        // Retornamos el metodo __invoke del caso de uso
        return $this->findAllUseCase->__invoke();
    }
}
