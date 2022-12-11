<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggaran extends Model
{
    use HasFactory;
    protected $guarded = [];
 
    public function pelanggaran()
    {
        return $this->belongsToMany(siswa::class, guru_siswa::class);
    }
}
