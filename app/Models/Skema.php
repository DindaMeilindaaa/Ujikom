<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skema extends Model
{
    use HasFactory;

    protected $table = 'skema';

    protected $primaryKey = 'id'; // jika id tidak digunakan

    protected $fillable = [
        'Kd_skema',
        'Nm_skema',
        'Jenis',
        'Jml_unit',
    ];

    // Relationship dengan peserta
    public function pesertas()
    {
        return $this->hasMany(Peserta::class, 'Kd_skema');
    }
}
