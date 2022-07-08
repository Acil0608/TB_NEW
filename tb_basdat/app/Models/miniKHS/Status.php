<?php

namespace App\Models\miniKHS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\miniKHS\Jadwal;
use App\Models\miniKHS\Pelajar;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_absensi',
        'jadwal_id'
    ];

    public function jadwal(){
        return $this->belongsTo(Jadwal::class);
    }

    public function pelajar(){
        return $this->hasOne(Pelajar::class, 'status_id', 'id');
    }
}
