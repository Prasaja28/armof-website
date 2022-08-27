<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $guarded = [];
    //one to many role - user
    public function user()
    {
        return $this->hasMany(User::class, 'id');
    }
}
