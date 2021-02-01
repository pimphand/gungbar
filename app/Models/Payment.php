<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Payment extends Model
{
    protected $table = 'members_payment';
    protected $fillable =[
    'member_payment_id',
    'user_id',
    'member_price_id',
    'nama_trasnfer',
    'tgl_transfer',
    'bukti_transfer',
    'status'];

    public function userPayment()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function memberPayment()
    {
        return $this->belongsTo(Price::class,'member_price_id','id');
    }
}
