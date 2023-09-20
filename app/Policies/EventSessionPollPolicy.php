<?php

namespace App\Policies;

use App\Models\User;
use App\Models\EventSessionPoll;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventSessionPollPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_event::session::poll');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EventSessionPoll  $eventSessionPoll
     * @return bool
     */
    public function view(User $user, EventSessionPoll $eventSessionPoll): bool
    {
        return $user->can('view_event::session::poll');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function create(User $user): bool
    {
        return $user->can('create_event::session::poll');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EventSessionPoll  $eventSessionPoll
     * @return bool
     */
    public function update(User $user, EventSessionPoll $eventSessionPoll): bool
    {
        return $user->can('update_event::session::poll');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EventSessionPoll  $eventSessionPoll
     * @return bool
     */
    public function delete(User $user, EventSessionPoll $eventSessionPoll): bool
    {
        return $user->can('delete_event::session::poll');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_event::session::poll');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EventSessionPoll  $eventSessionPoll
     * @return bool
     */
    public function forceDelete(User $user, EventSessionPoll $eventSessionPoll): bool
    {
        return $user->can('force_delete_event::session::poll');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_event::session::poll');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EventSessionPoll  $eventSessionPoll
     * @return bool
     */
    public function restore(User $user, EventSessionPoll $eventSessionPoll): bool
    {
        return $user->can('restore_event::session::poll');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_event::session::poll');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EventSessionPoll  $eventSessionPoll
     * @return bool
     */
    public function replicate(User $user, EventSessionPoll $eventSessionPoll): bool
    {
        return $user->can('replicate_event::session::poll');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_event::session::poll');
    }

}
