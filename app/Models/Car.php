<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * Samochody od właścicieli
 *
 * @property int $id
 * @property int $owner_id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $udpated_at
 *
 * @property-read User $owner
 */
class Car extends Model
{
    use HasFactory;

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
