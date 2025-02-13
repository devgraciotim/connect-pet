<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetImage extends Model
{
    use HasFactory;

    protected $table = 'pet_image';

    protected $fillable = [
        'pet_id',
        'url'
    ];

    /**
     * Get the pet that owns the PetImage
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pet(): BelongsTo
    {
        return $this->belongsTo(User::class, 'pet_id');
    }
}
