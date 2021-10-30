<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillItem extends Model
{
    public function bill () {
        return $this->belongsTo(bill::class);
    }
}
