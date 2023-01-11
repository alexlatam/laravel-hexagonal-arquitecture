<?php

namespace Src\Example\User\Application\Find;

final class UserFindAllUseCase
{
    private $repository;

    public function __construct() {
        // $this->var = $var;
    }

    public function __invoke(): array {
        return [
            "Hola planeta desde el caso de uso"
        ];
    }
}
