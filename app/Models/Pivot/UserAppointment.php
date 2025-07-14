<?php

namespace App\Models\Pivot;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserAppointment extends Pivot
{
    protected $table = 'users_appointments';
    public $timestamps = false;

    protected $casts = [
        'ap_datetime' => 'datetime',
    ];
}
