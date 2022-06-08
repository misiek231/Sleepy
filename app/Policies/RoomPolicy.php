<?php

namespace App\Policies;

use App\Models\Offer;
use App\Models\Room;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RoomPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Room $room
     * @return bool
     */
    public function view(User $user, Room $room): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @param Offer $offer
     * @return bool
     */
    public function create(User $user, Offer $offer): bool
    {
        return ($offer->user_id === $user->id) || $user->isAdmin();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Room $room
     * @return bool
     */
    public function update(User $user, Room $room): bool
    {
        return ($room->offer->user_id === $user->id) || $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Room $room
     * @return bool
     */
    public function delete(User $user, Room $room): bool
    {
        return ($room->offer->user_id === $user->id) || $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Room $room
     * @return bool
     */
    public function restore(User $user, Room $room): bool
    {
        return ($room->offer->user_id === $user->id) || $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Room $room
     * @return bool
     */
    public function forceDelete(User $user, Room $room): bool
    {
        return ($room->offer->user_id === $user->id) || $user->isAdmin();
    }
}
