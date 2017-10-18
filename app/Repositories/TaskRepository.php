<?php
/**
 * Created by PhpStorm.
 * User: Glados
 * Date: 08.10.2017
 * Time: 15:51
 */

namespace App\Repositories;

use App\User;

class TaskRepository
{
    public function forUser(User $user)
    {
        return $user->tasks()
            ->orderBy('created_at','asc')
            ->get();
    }
}