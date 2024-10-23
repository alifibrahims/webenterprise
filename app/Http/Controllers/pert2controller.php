<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pert2controller extends Controller
{
    public function TampilPert2()
    {
        $data = [
            'total products' => 310,
            'sales today' => 100,
            'total revenue' => 'Rp50,000,000',
            'registeredUsers' => 350
        ];
        return view('pert2' ,$data);
    }
}
