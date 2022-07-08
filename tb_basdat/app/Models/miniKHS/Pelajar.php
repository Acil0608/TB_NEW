<?php

namespace App\Models\miniKHS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\miniKHS\Jurusan;
use App\Models\miniKHS\Status;
use App\Models\miniKHS\Kelas;

class Pelajar extends Model
{

    protected $fillable = [
        'nama_pelajar',
        'jurusan_id',
        'status_id',
        'kelas_id',
    ];

    public function jurusan(){
        $this->belongsTo(Jurusan::class);
    }

    public function status(){
        return $this->hasOne(Status::class);
    }

    public function kelas(){
        return $this->hasOne(Kelas::class);
    }
}
