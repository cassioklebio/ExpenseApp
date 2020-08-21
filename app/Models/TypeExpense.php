<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeExpense extends Model
{
    protected $fillable = [
        'nome',
        'slug'
    ];

    public function Expense()
    {
        return $this->belongsTo(Expense::class);
    }
}
