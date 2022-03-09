<?php

namespace App\Observers;

use App\Models\PendingUserPhoneNumber;

class PendingUserPhoneNumberObserver
{
    public function creating(PendingUserPhoneNumber $pendingUserPhoneNumber)
    {
        if ($pendingUserPhoneNumber->isDirty('phone_number') && $pendingUserPhoneNumber->phone_number) {
            $pendingUserPhoneNumber->phone_number_e164 = phone($pendingUserPhoneNumber->phone_number, 'NG')->formatE164();
        }
    }

    /**
     * Handle the PendingUserPhoneNumber "created" event.
     *
     * @param  \App\Models\PendingUserPhoneNumber  $pendingUserPhoneNumber
     * @return void
     */
    public function created(PendingUserPhoneNumber $pendingUserPhoneNumber)
    {
        //
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $pendingUserPhoneNumber
     * @return void
     */
    public function updating(PendingUserPhoneNumber $pendingUserPhoneNumber)
    {
        if ($pendingUserPhoneNumber->isDirty('phone_number') && $pendingUserPhoneNumber->phone_number) {
            $pendingUserPhoneNumber->phone_number_e164 = phone($pendingUserPhoneNumber->phone_number, 'NG')->formatE164();
        }
    }

     /**
     * Handle the User "saving" event.
     *
     * @param  \App\Models\User  $pendingUserPhoneNumber
     * @return void
     */
    public function saving(PendingUserPhoneNumber $pendingUserPhoneNumber)
    {
        if ($pendingUserPhoneNumber->isDirty('phone_number') && $pendingUserPhoneNumber->phone_number) {
            $pendingUserPhoneNumber->phone_number_e164 = phone($pendingUserPhoneNumber->phone_number, 'NG')->formatE164();
        }
    }

    /**
     * Handle the PendingUserPhoneNumber "updated" event.
     *
     * @param  \App\Models\PendingUserPhoneNumber  $pendingUserPhoneNumber
     * @return void
     */
    public function updated(PendingUserPhoneNumber $pendingUserPhoneNumber)
    {
        //
    }

    /**
     * Handle the PendingUserPhoneNumber "deleted" event.
     *
     * @param  \App\Models\PendingUserPhoneNumber  $pendingUserPhoneNumber
     * @return void
     */
    public function deleted(PendingUserPhoneNumber $pendingUserPhoneNumber)
    {
        //
    }

    /**
     * Handle the PendingUserPhoneNumber "restored" event.
     *
     * @param  \App\Models\PendingUserPhoneNumber  $pendingUserPhoneNumber
     * @return void
     */
    public function restored(PendingUserPhoneNumber $pendingUserPhoneNumber)
    {
        //
    }

    /**
     * Handle the PendingUserPhoneNumber "force deleted" event.
     *
     * @param  \App\Models\PendingUserPhoneNumber  $pendingUserPhoneNumber
     * @return void
     */
    public function forceDeleted(PendingUserPhoneNumber $pendingUserPhoneNumber)
    {
        //
    }
}
