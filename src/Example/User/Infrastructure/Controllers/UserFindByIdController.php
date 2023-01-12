<?php

namespace Src\Example\User\Infrastructure\Controllers;

use Src\Example\User\Application\Find\UseFindByIdUseCase;
use Symfony\Component\HttpFoundation\Request;

final class UserFindByIdController
{
    public $findByIdUseCase;

    public function __construct(UseFindByIdUseCase $findByIdUseCase) {
        $this->findByIdUseCase = $findByIdUseCase;
    }

    public function __invoke(Request $request, int $id): ?array
    {
        // Retornamos el metodo __invoke del caso de uso
        return $this->findByIdUseCase->__invoke($id);
    }
}
