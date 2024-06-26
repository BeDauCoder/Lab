<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Favorities extends Model
{
    use HasFactory;

    protected $table = 'favorities';

    protected $primaryKey = 'favorite_id';

    public $incrementing = true;

    /*
     * Relationship Favorites
     * */
    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
