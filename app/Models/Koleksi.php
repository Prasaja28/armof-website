<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koleksi extends Model
{
    use HasFactory;
    protected $table = 'koleksi';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_koleksi', 'furniture_id', 'fungsi_id', 'foto', 'gender', 'age_min', 'age_max', 'deskripsi', 'link_ar', 'height', 'weight'];
    protected $guarded = [];

    public function relasi_furniture()
    {
        return $this->belongsTo(Kategori_furniture::class, 'furniture_id');
    }

    public function relasi_fungsi()
    {
        return $this->belongsTo(Kategori_fungsi::class, 'fungsi_id');
    }
}
