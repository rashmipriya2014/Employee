<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeDetail extends Model
{
    protected $fillable = [
        'employee_name',
        'address_1',
        'address_2',
        'location',
        'postal_code',
        'postal_area',
        'taluka',
        'suburbs',
        'direction',
        'city',
        'district',
        'state',
        'country',
        'mobile',
        'whatsapp',
        'email',
    ];
}
