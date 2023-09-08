<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Series extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'series';

    /**
     * Mass insert
     *
     * @var string[]
     */
    protected $fillable = ['id', 'name', 'description'];

    /**
     * Hide fields
     *
     * @var string[]
     */
    protected $hidden = ['created_at', 'updated_at'];

    /**
     * @return HasMany
     */
    public function episodes(): HasMany
    {
        return $this->hasMany(Episodes::class);
    }
}
