<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $primaryKey = 'TypeID';

    public function items()
    {
        return $this->hasMany(Item::class, 'TypeID');
    }
}