<?php

namespace App\Models\miniKHS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\miniKHS\Jurusan;
use App\Models\miniKHS\Pelajaran;
use App\Models\miniKHS\Kelas;
use App\Models\miniKHS\Status;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'hari',
        'kelas_id'
    ];

    public function jurusan(){
        return $this->hasMany(Jurusan::class,'jadwal_id', 'id');
    }

    public function pelajaran(){
        return $this->hasMany(Pelajaran::class,'jadwal_id', 'id');
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function status(){
        return $this->hasMany(Status::class,'jadwal_id', 'id');
    }
}
