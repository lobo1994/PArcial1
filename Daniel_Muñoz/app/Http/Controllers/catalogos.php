<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catalogos extends Controller
{
    public function canino(){
        $datos1=[
            'alimento para perro',
            '1234',
            '2000'
            
        ];
        $datos2=[
            'Plato para perro',
            '1235',
            '5000'
            
        ];
        $datos3=[
            'juguete para perro',
            '1236',
            '3000'
            
        ];
        $datos4=[
            'correa para perro',
            '1236',
            '8000'
            
        ];
        $datos5=[
            'casa para perro',
            '1238',
            '7000'
            
        ];
        $datos6=[
            'gorro para perro',
            '1237',
            '9000'
            
        ];
        
        return view('Caninos',['date1'=>$datos1,'date2'=>$datos2,'date3'=>$datos3,'date4'=>$datos4,'date5'=>$datos5,'date6'=>$datos6]);
    }
    public function felino(){
        $datos1=[
            'alimento para gato',
            '1234',
            '2000'
            
        ];
        $datos2=[
            'Plato para gato',
            '1235',
            '5000'
            
        ];
        $datos3=[
            'juguete para gato',
            '1236',
            '3000'
            
        ];
        $datos4=[
            'correa para gato',
            '1236',
            '8000'
            
        ];
        $datos5=[
            'casa para gato',
            '1238',
            '7000'
            
        ];
        $datos6=[
            'gorro para gato',
            '1237',
            '9000'
            
        ];
        return view('Felinos',['date1'=>$datos1,'date2'=>$datos2,'date3'=>$datos3,'date4'=>$datos4,'date5'=>$datos5,'date6'=>$datos6]);
    }
}
