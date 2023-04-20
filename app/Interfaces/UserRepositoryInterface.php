<?php

namespace App\Interfaces;

use App\Models\User;

interface UserRepositoryInterface 
{
    public function all(): array;

    public function find(int $id): ?User;

    public function create(array $data): User;

    public function update(int $id, array $data): ?User;

    public function remove(int $id): bool;
}