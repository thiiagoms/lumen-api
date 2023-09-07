<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Episodes extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'episodes';

    /**
     * Mass insert
     *
     * @var string[]
     */
    protected $fillable = ['id', 'season', 'number', 'watched', 'series_id'];

    /**
     * @return BelongsTo
     */
    public function series(): BelongsTo
    {
        return $this->belongsTo(Series::class);
    }
}
