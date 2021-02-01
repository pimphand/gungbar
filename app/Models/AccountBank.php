<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountBank extends Model
{
    protected $table = 'bank_account';
    protected $fillable = ['bank_id','bank_name','bank_branch','bank_account_number','bank_account_name'];
}
