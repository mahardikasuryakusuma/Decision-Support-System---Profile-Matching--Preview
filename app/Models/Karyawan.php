<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Karyawan extends Model
{
    
    protected $fillable = [
        'nama',
        'no_hp',
        'email',
    ];

    public function sample(): HasMany
    {
        return $this->hasMany(Sample::class);
    }
}
