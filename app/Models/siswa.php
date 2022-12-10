<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    // protected $table = "siswas";
 
    public function guruss()
    {
        return $this->belongsToMany(guru::class, guru_siswa::class);
    }
    
    public function kasus() {
        return $this->belongsToMany(pelanggaran::class, guru_siswa::class);
    }
}
