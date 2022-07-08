<?php

namespace App\Models\miniKHS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\miniKHS\Guru;
use App\Models\miniKHS\Pelajar;
use App\Models\miniKHS\Jadwal;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_jurusan',
        'id_jadwal'
    ];

    public function jadwal(){
        return $this->belongsTo(Jadwal::class);
    }

    public function guru(){
        return $this->hasOne(Guru::class,'jurusan_id', 'id');
    }

    public function pelajar(){
        return $this->hasOne(Pelajar::class,'jurusan_id', 'id');
    }
}
