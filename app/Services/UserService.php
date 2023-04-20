<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function findAllUsers(): array
    {
        return $this->userRepository->all();
    }

    public function findUser(int $id): ?User
    {
        return $this->userRepository->find($id);
    }

    public function createUser(array $data): User
    {
        return $this->userRepository->create($data);
    }

    public function updateUser(int $id, array $data): ?User
    {
        return $this->userRepository->update($id, $data);
    }

    public function removeUser(int $id): bool
    {
        return $this->userRepository->remove($id);
    }
}
