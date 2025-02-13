<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPreferredSpecies extends Model
{
    use HasFactory;

    protected $table = 'user_preferred_species';

    protected $fillable = [
        'species_id',
        'user_id'
    ];

    /**
     * Get the species that owns the UserPreferredSpecies
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function species(): BelongsTo
    {
        return $this->belongsTo(Species::class, 'species_id');
    }

    /**
     * Get the user that owns the UserPreferredSpecies
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
