<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\UsesUuid;

class Company extends Model
{
    use HasFactory, UsesUuid;

    protected $guarded = [];

    protected $fillable = [
        'companyname',
        'category',
        'email',
        'address',
        'phone',
        'usertype',
        'taxidentifier',
        'imagelogo'
    ];

    public $timestamps = true;
}
