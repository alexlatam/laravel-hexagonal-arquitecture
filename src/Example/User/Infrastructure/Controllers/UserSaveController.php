<?php

namespace Src\Example\User\Infrastructure\Controllers;

use Illuminate\Http\Request;
use Src\Example\Shared\Infrastructure\Helpers\DateHelper;
use Src\Example\User\Application\Save\UserSaveUseCase;


final class UserSaveController
{
    use DateHelper;

    private $userSaveUseCase;

    public function __construct(UserSaveUseCase $userSaveUseCase) {
        $this->userSaveUseCase = $userSaveUseCase;
    }

    public function __invoke(Request $request)
    {
        return $this->userSaveUseCase->__invoke($request->all(), $this->getNow());
    }
}
