<?php

declare(strict_types=1);

namespace App\ModelRepositories;

use App\ModelRepositoryInterfaces\UserModelRepositoryInterface;
use App\Models\User;

class UserModelRepository implements UserModelRepositoryInterface
{
    public function find(array $userIds): array
    {
        return User::with('imagePriority')
        ->whereIn('user_id', $userIds)
        ->get()
        ->toArray();
    }

    public function all(): array
    {
        return User::all()
        ->toArray();
    }
}
