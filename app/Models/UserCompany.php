<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCompany extends Model
{

    protected $table = 'users_company';
    protected $fillable =
    [
        'user_company_id ',
        'company_name',
        'user_id',
        'company_email',
        'company_phone',
        'category',
        'company_address',
        'jobdesk',
        'pic_name',
        'category_industry',
        'country',
        'province',
        'city',
        'distrik',
        'postal_code',
        'alamat_korespondensi',
        'negara_korespondensi',
        'provinsi_korespondensi',
        'kota_korespondensi',
        'distrik_korespondensi',
        'kode_pos_korespondensi'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_company_id', 'id');
    }
}
