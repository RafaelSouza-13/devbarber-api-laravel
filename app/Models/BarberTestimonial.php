<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarberTestimonial extends Model
{
    protected $table = 'barbers_testimonials';
    public $timestamps = false;

    public function barber(){
        return $this->belongsTo(Barber::class, 'barber_id');
    }
}
