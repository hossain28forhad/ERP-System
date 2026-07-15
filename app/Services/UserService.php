<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function __construct(
        protected UserRepositoryInterface $repository
    ) {}

    public function list()
    {
        return $this->repository->paginate(10);
    }

    public function store(array $data): User
    {
        $data['password'] = Hash::make($data['password']);

        $role = $data['role'];

        unset($data['role']);

        $user = $this->repository->create($data);

        $user->assignRole($role);

        return $user;
    }

    public function update(User $user, array $data)
    {
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $role = $data['role'];

        unset($data['role']);

        $this->repository->update($user, $data);

        $user->syncRoles([$role]);
    }

    public function delete(User $user)
    {
        $this->repository->delete($user);
    }
}
