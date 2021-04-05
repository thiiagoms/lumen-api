<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episodes extends Model
{
    public $timestamps = false;
    protected $table = 'episodes';
    protected $fillable = ['id', 'season', 'number', 'watched', 'series_id'];

    public function series()
    {
        $this->belongsTo(Series::class);
    }
}
