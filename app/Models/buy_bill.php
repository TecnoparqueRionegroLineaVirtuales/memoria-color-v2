<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\buys;

class buy_bill extends Model
{
    use HasFactory;

    protected $table = 'buy_bill';
    protected $fillable = ['bill_id', 'buy_id', 'user_id', 'adress'];

    public function bill()
    {
        return $this->belongsTo(Bill::class, 'bill_id');
    }

    public function buys()
    {
        return $this->belongsTo(buys::class, 'buy_id')->with('product');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}