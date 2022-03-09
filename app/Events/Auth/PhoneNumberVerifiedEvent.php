<?php

namespace App\Events\Auth;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PhoneNumberVerifiedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

      /**
     * The verified user.
     *
     * @var \Illuminate\Contracts\Auth\MustVerifyPhoneNumber
     */
    public $user;

    /**
     * Create a new event instance.
     *
     * @param  \Illuminate\Contracts\Auth\MustVerifyPhoneNumber $user
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }
}
