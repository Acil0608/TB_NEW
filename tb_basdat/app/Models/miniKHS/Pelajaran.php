<?php

namespace App\Models\miniKHS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\miniKHS\Jadwal;

class Pelajaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelajaran',
        'mulai_pelajaran',
        'akhir_pelajaran',
        'jadwal_id'
    ];

    public function jadwal(){
        return $this->belongsTo(Jadwal::class);
    }

    public function guru(){
        return $this->hasOne(Guru::class,'pelajaran_id', 'id');
    }
}
