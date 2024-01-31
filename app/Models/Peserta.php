<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'peserta';

    protected $primaryKey = 'id'; // jika id tidak digunakan

    protected $fillable = [
        'Kd_skema',
        'Nm_peserta',
        'Jekel',
        'Alamat',
        'No_hp',
    ];

    // Relationship dengan skema
    public function skema()
    {
        return $this->belongsTo(Skema::class, 'Kd_skema');
    }
}
