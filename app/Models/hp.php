<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hp extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    public function merek()
    {
        return $this->hasMany(merek::class, 'id', 'id_merek');
    }
}
