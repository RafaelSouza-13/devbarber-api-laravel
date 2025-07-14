<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarberService extends Model
{
    protected $table = 'barbers_services';
    public $timestamps = false;

    public function barber(){
        return $this->belongsTo(Barber::class, 'barber_id');
    }
}
