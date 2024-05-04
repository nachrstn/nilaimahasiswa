<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Krs extends Model
{
    use HasFactory;
    protected $table = "krs";
    protected $guarded = ['id'];
    protected $appends = ['huruf'];

    public function getHurufAttribute()
    {
        if ($this->nilai >= 80) {
            $huruf = 'A';
        } else if ($this->nilai >= 60) {
            $huruf = 'B';
        } else if ($this->nilai >= 40) {
            $huruf = 'C';
        } else {
            $huruf = 'D';
        }
        return $huruf;
    }

    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function mataKuliah(): BelongsTo
    {
        return $this->belongsTo(MataKuliah::class);
    }

    public function semester(): BelongsTo
    {
        return $this->belongsTo(semester::class);
    }
}
