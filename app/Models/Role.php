<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
//    protected $guarded = ['name'];

    public function users()
    {
        // relation with role with user
        return $this->hasMany(User::class, 'role_id', 'id');
    }
}
