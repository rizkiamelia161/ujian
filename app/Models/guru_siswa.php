<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru_siswa extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kasus()
    {
        return $this->belongsToMany(siswa::class, guru::class, pelanggaran::class);
    }
}
