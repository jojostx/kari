<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payout extends Model
{
    use HasFactory;

    // STATUS STATES //
    const CREATED = 1;
    const REQUESTED = 2;
    const WITHDRAWN = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'tag',
        'amount',
        'refcode',
        'status',
        'user_id',
        'subscription_id',
    ];

    /**
     * Scope a query to return the available roommates for the authenticated user.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeGenerated($query)
    {
        return $query->where('status', self::CREATED);
    }

    /**
     * Scope a query to return the available roommates for the authenticated user.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRequested($query)
    {
        return $query->where('status', self::REQUESTED);
    }

    /**
     * Scope a query to return the available roommates for the authenticated user.
     * @method availableRoommates()
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithdrawn($query)
    {
        return $query->where('status', self::WITHDRAWN);
    }

    /**
     * The subscription for this payout.
     */
    public function subscription()
    {
        return $this->belongsTo(Payment::class, 'subscription_id');
    }

    /**
     * The subscription for this payout.
     */
    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // accessors //
    public function getWithdrawnAtAttribute()
    {
        if ($this->updated_at->notEqualTo($this->created_at)) {
            return $this->updated_at;
        }

        return \now();
    }

    // helpers //
    public function approve(): bool
    {
        if ($this->status == self::WITHDRAWN) {
            return false;
        }

        if (\is_null($this->refcode)) {
            return false;
        }

        $this->status = self::REQUESTED;

        $saved = $this->save();

        return $saved;
    }

    public function withdraw(): bool
    {
        if ($this->status == self::WITHDRAWN || $this->status == self::REQUESTED) {
            return false;
        }

        $this->status = self::REQUESTED;

        $saved = $this->save();

        return $saved;
    }
}
