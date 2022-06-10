<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmerUser extends Model
{
    use HasFactory;

    protected $table = 'tbl_privacy_users';

    protected $fillable = [
        'raw_mobile',
        'raw_name',
        'raw_otp',
        'raw_status',
        'raw_is_active',
    ];
}
