<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * Klasa reprezentująca prace do wykonania w serwisie.
 *
 * @property int $id
 * @property int $car_id
 * @property int $service_id
 * @property Carbon $deadline_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Job extends Model
{
    use HasFactory;

    protected $casts = [
        'deadline_at' => 'datetime',
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class, 'car_id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
