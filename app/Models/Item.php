<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $primaryKey = 'ItemID';

    public function type()
    {
        return $this->belongsTo(Type::class, 'TypeID');
    }

    public function borrower()
    {
        return $this->belongsTo(User::class, 'borrower');
    }
}
