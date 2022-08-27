<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_furniture extends Model
{
    use HasFactory;
    protected $table = 'kategori_furniture';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_kategori_furniture', 'foto'];
    protected $guarded = [];
}
