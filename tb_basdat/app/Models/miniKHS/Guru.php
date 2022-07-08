<?php

namespace App\Models\miniKHS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\miniKHS\Jurusan;
use App\Models\miniKHS\Pelajaran;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_guru',
        'jurusan_id',
        'pelajaran_id'
    ];

    public function jurusan(){
        $this->belongsTo(Jurusan::class);
    }

    public function pelajaran(){
        $this->belongsTo(Pelajaran::class);
    }
}
