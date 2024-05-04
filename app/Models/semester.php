<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Semester extends Model
{
    use HasFactory;
    protected $table = "semester";
    protected $guarded = ['id'];

    public function krs(): HasMany
    {
        return $this->hasMany(Krs::class);
    }
}
