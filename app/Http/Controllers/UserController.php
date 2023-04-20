<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\UserService;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function findAll()
    {
        $users = $this->userService->findAllUsers();
        return response()->json($users, 200);
    }

    public function findOne(int $id)
    {
        $user = $this->userService->findUser($id);
        if (!$user) {
            return response()->json(['error' => 'User not found!'], 404);
        }
        return response()->json($user, 200);
    }

    public function create(UserRequest $request)
    {
        $user = $this->userService->createUser($request->toArray());
        return response()->json($user, 201);
    }

    public function update(int $id, UserRequest $request)
    {
        $user = $this->userService->updateUser($id, $request->toArray());
        if (!$user) {
            return response()->json(['error' => 'User not found!'], 404);
        }
        return response()->json($user, 200);
    }

    public function remove(int $id)
    {
        $user = $this->userService->removeUser($id);
        if (!$user) {
            return response()->json(['error' => 'User not found!'], 404);
        }
        return response()->json($user, 200);
    }
}
