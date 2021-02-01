<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class UserGrup extends Model
{
    protected $table = 'users_member';
    protected $fillable =
    [
        'member_id',
        'user_id',
        'user_id_pic',
        'nama',
        'company_name',
        'jobdesk',
        'alamat_korespondensi',
        'email_kantor',
        'email_pribadi',
        'phone',
        'phone_company',
        'business_title',
        'pic',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'member_id', 'id');
    }

}
