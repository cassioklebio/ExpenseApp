<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    protected $fillable = [
        'status',
    ];

    public function Expense()
    {
        return $this->belongsTo(Expense::class);
    }
}
