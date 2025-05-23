<?php

namespace App\Policies;

use App\Models\Ensamble;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class EnsamblePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return strval($user->rol)  === strval(4) || strval($user->rol) === strval(1);

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Ensamble $ensamble): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return strval($user->rol)  === strval(4) || strval($user->rol) === strval(1);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user): bool
    {
        return strval($user->rol)  === strval(4) || strval($user->rol) === strval(1);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Ensamble $ensamble): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Ensamble $ensamble): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Ensamble $ensamble): bool
    {
        //
    }
}
