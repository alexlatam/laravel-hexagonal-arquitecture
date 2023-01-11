<?php

namespace Src\Example\User\Application\Find;

use Src\Example\User\Domain\Exceptions\UserException;

final class UserFindAllUseCase
{
    private $repository;

    public function __construct() {
        // $this->var = $var;
    }

    public function __invoke(): array
    {
        throw new UserException('Esta es una excepcion personalizada', 500);
        return [
            "saludo" => "Hola planeta desde el caso de uso"
        ];
    }
}
