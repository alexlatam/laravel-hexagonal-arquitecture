<?php

namespace Src\Example\User\Application\Save;

use GuzzleHttp\Psr7\Request;
use Src\Example\User\Domain\Contracts\UserRepositoryInterface;
use Src\Example\User\Domain\Exceptions\UserException;
use Src\Example\User\Domain\ValueObject\UserSaveRequest;

final class UserSaveUseCase
{
    private $repository;

    public function __construct(UserRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function __invoke(array $request, string $date)
    {
        $response = $this->repository->save(new UserSaveRequest($request, $date));

        if (!$response) return $this->exception();
        return [
            'status' => 200,
            'data'   => [
                'id' => $response
            ]
        ];
    }

    private function exception(): void
    {
        throw new UserException("User not register", 404);
    }
}
