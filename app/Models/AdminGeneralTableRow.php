<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminGeneralTableRow extends Model
{
    use HasFactory;
    public $items;
    public $columns;

    public function __construct($items, $columns)
    {
        $this->items = $items;
        $this->columns = $columns;
    }

    public function render()
    {
        return view('Components.admin-general-table-row');
    }
}
