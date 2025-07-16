<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use Illuminate\Http\Request;

class BarberController extends Controller
{
    public function findAll(){
        $barbers = Barber::all();
        $data['data'] = $barbers;
        $array['loc'] = 'Teste';
        return response()->json($data, 200);
    }
}
