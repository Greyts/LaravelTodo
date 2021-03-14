<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Tasks;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function complete(User $user, Tasks $task)
    {
        return $user->is($task->user);
    }
}
