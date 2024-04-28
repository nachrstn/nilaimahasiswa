<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends = ['ipk'];

    public function getIpkAttribute()
    {
        $totalSks = 0;
        $totalIp = 0;

        $listKrs = $this->krs;
        foreach ($listKrs as $krs) {
            $sks = $krs->mataKuliah->sks;

            if ($krs->nilai >= 80) {
                $nilai = 4;
            } else if ($krs->nilai >= 60) {
                $nilai = 3;
            } else if ($krs->nilai >= 40) {
                $nilai = 2;
            } else {
                $nilai = 0;
            }

            $totalSks =+ $sks;
            $totalIp =+ $sks * $nilai;
        }

        $ipk = 0;
        if ($totalIp != 0) {
            $ipk = $totalIp / $totalSks;
        }
        return $ipk;
    }

    public function krs(): HasMany
    {
        return $this->hasMany(Krs::class);
    }
}
