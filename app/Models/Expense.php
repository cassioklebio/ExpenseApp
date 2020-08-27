<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'nome',
        'despesaValor'
    ];


    public function TypeExpense()
    {
        return $this->hasOne(TypeExpense::class);
    }

    public function Approval()
    {
        return $this->hasOne(Approval::class);
    }
}
