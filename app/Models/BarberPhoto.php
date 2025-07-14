<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarberPhoto extends Model
{
    protected $table = 'barbers_photos';
    public $timestamps = false;

    public function barber(){
        return $this->belongsTo(Barber::class, 'barber_id');
    }
}
