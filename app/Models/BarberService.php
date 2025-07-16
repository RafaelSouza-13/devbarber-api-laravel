<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BarberService extends Model
{
    use HasFactory;
    protected $table = 'barbers_services';
    public $timestamps = false;

    public function barber(){
        return $this->belongsTo(Barber::class, 'barber_id');
    }
}
