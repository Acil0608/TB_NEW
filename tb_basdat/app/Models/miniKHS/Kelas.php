<?php

namespace App\Models\miniKHS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\miniKHS\Jadwal;
use App\Models\miniKHS\Pelajar;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kelas',
        'jadwal_id'
    ];

    public function jadwal(){
        return $this->belogsTo(Jadwal::class);
    }

    public function pelajar(){
        return $this->hasMany(Pelajar::class, 'kelas_id', 'id');
    }
}
