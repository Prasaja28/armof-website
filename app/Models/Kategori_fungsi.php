<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_fungsi extends Model
{
    use HasFactory;
    protected $table = 'kategori_fungsi';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_kategori_fungsi', 'foto'];
    protected $guarded = [];
}
