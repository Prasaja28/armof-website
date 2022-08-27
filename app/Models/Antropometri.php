<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antropometri extends Model
{
    use HasFactory;
    protected $table = 'antropometri';
    protected $primaryKey = 'id';
    protected $fillable = ['foto', 'status'];

    public function photos()
    {
        return $this->morphMany(Media::class, 'model');
    }
}
