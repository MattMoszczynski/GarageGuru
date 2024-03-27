<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Klasa reprezentująca usługi oferowane przez serwis.
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property double $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Service extends Model
{
    use HasFactory;

    protected $casts = [
        'price' => 'double',
    ];
}
