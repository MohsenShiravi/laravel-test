<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable=['title'];

    public function permissions()
    {
        $this->belongsToMany(Permission::class, 'permission_role');
    }
}
