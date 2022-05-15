<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['name, description, price, beds_amount, offer_id'];

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
