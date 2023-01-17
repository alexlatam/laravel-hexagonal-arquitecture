<?php

namespace Src\Example\User\Infrastructure\Controllers;

use Src\Example\User\Application\Delete\UserDeleteByIdUseCase;
use Illuminate\Http\Request;

final class UserDeleteByIdController
{
    public $deleteByIdUseCase;

    public function __construct(UserDeleteByIdUseCase $deleteByIdUseCase) {
        $this->deleteByIdUseCase = $deleteByIdUseCase;
    }

    public function __invoke(Request $request, int $id): array
    {
        // Retornamos el metodo __invoke del caso de uso
        return $this->deleteByIdUseCase->__invoke($id);
    }
}
