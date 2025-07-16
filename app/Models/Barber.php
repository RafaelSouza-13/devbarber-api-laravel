<?php

namespace App\Models;

use App\Models\Pivot\UserAppointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barber extends Model
{
    use HasFactory;
    protected $table = 'barbers';
    public $timestamps = false;

    public function avaliability(){
        return $this->hasMany(BarberAvailability::class, 'barber_id');
    }

    public function photos(){
        return $this->hasMany(BarberPhoto::class, 'barber_id');
    }

    public function services(){
        return $this->hasMany(BarberService::class, 'barber_id');
    }

    public function testimonials(){
        return $this->hasMany(BarberTestimonial::class, 'barber_id');
    }

    public function appointments(){
        return $this->belongsToMany(User::class)
                ->using(UserAppointment::class)
                ->withPivot(['ap_datetime'])
                ->withTimestamps();
    }

    public function favorites(){
        return $this->belongsToMany(User::class, 'users_favorites', 'barber_id', 'user_id');
    }
}
