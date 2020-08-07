<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103118011, 
            'Name' => 'Alfina Balqis Nurzaharani', 
            'Gender' => 'Perempuan', 
            'Phone' => 62898077538,
            'Class' => 'XII RPL 1'
        ];
    }
}
