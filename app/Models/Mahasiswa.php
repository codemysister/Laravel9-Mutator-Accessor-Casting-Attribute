<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'ipk' => 'decimal:1'
    ];

    public function getNamaAttribute($value)
    {
        return strtoupper($value);

        // $this->attributes['nama'];


    }

    public function getTanggalLahirAttribute($value)
    {
        $nama_bulan = ["Januari", "Februari", "Maret", "April", "Juni", "Juli", "Agustus", "September", "Oktober", "Novermber", "Desember"];

        $tanggal = date("j", strtotime($value));

        $bulan = date("n", strtotime($value)) - 1;

        $tahun = date("Y", strtotime($value));

        return "$tanggal $nama_bulan[$bulan] $tahun";
    }

    public function getNamaBesarAttribute()
    {
        return strtoupper($this->nama);
    }

    public function setNamaAttribute($value)
    {
        $this->attributes['nama'] = strtolower($value);
    }
}
