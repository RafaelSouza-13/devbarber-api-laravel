<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarberAvailability extends Model
{
    protected $table = 'barbers_avaliability';
    public $timestamps = false;

    public function barber(){
        return $this->belongsTo(Barber::class, 'barber_id');
    }
}
