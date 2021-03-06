<?php

namespace App\Policies;

use App\Models\LinkSubmission;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LinkSubmissionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('view link submissions');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\LinkSubmission  $linkSubmission
     * @return mixed
     */
    public function view(User $user, LinkSubmission $linkSubmission)
    {
        return $user->hasPermissionTo('view link submissions');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create link submissions');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\LinkSubmission  $linkSubmission
     * @return mixed
     */
    public function update(User $user, LinkSubmission $linkSubmission)
    {
        return $user->hasPermissionTo('edit link submissions');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\LinkSubmission  $linkSubmission
     * @return mixed
     */
    public function delete(User $user, LinkSubmission $linkSubmission)
    {
        return $user->hasPermissionTo('delete link submissions');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\LinkSubmission  $linkSubmission
     * @return mixed
     */
    public function restore(User $user, LinkSubmission $linkSubmission)
    {
        return $user->hasPermissionTo('delete link submissions');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\LinkSubmission  $linkSubmission
     * @return mixed
     */
    public function forceDelete(User $user, LinkSubmission $linkSubmission)
    {
        return $user->hasPermissionTo('delete link submissions');
    }
}
