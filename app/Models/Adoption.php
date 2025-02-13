<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;

    protected $table = 'adoption';

    protected $fillable = [
        'pet_id',
        'adopter_id',
        'status'
    ];

    /**
     * Get the pet that owns the Adoption
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pet(): BelongsTo
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }

    /**
     * Get the adopter that owns the Adoption
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function adopter(): BelongsTo
    {
        return $this->belongsTo(User::class, 'adopter_id');
    }
}
