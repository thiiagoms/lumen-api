<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public $timestamps = false;
    protected $table = 'series';
    protected $fillable = ['id', 'name', 'description', 'created_at'];

    public function episodes()
    {
        return $this->hasMany(Episodes::class);
    }
}
