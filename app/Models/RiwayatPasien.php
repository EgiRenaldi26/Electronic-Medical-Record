<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPasien extends Model
{
    use HasFactory;
    protected $table = 'riwayat_pasiens';
    protected $fillable = [
        'siswa_id','tanggal_masuk','keluhan','obat','ket'
    ];

    protected $casts = [
        'obat' => 'json',
    ];

    /**
     * Get the user that owns the RiwayatPasien
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id', 'id');
    }
}
