<?php

namespace Src\Example\User\Infrastructure\Services;

use Illuminate\Support\ServiceProvider;

final class DependencyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app
            ->when(\Src\Example\User\Application\Find\UserFindAllUseCase::class)  // cuando se llame a este use case
            ->needs(\Src\Example\User\Domain\Contracts\UserRepositoryInterface::class) // necesitamos un repositorio de usuarios
            ->give(\Src\Example\User\Infrastructure\Repositories\Eloquent\UserRepository::class); // y le damos este repositorio

        $this->app
            ->when(\Src\Example\User\Application\Find\UseFindByIdUseCase::class)  // cuando se llame a este use case
            ->needs(\Src\Example\User\Domain\Contracts\UserRepositoryInterface::class) // necesitamos un repositorio de usuarios
            ->give(\Src\Example\User\Infrastructure\Repositories\Eloquent\UserRepository::class); // y le damos este repositorio

        $this->app
            ->when(\Src\Example\User\Application\Delete\UserDeleteByIdUseCase::class)  // cuando se llame a este use case
            ->needs(\Src\Example\User\Domain\Contracts\UserRepositoryInterface::class) // necesitamos un repositorio de usuarios
            ->give(\Src\Example\User\Infrastructure\Repositories\Eloquent\UserRepository::class); // y le damos este repositorio

        $this->app
            ->when(\Src\Example\User\Application\Save\UserSaveUseCase::class)  // cuando se llame a este use case
            ->needs(\Src\Example\User\Domain\Contracts\UserRepositoryInterface::class) // necesitamos un repositorio de usuarios
            ->give(\Src\Example\User\Infrastructure\Repositories\Eloquent\UserRepository::class); // y le damos este repositorio
    }

    public function boot(): void
    {
    }

}
