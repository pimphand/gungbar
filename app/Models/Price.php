<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'members_price';
    protected $fillable = [
        'nama_member',
        'price',
        'discount',
    ];

    public function memberPayment()
    {
        return $this->hasMany(Payment::class,'member_price_id','id');
    }

}
