<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PaginasController extends Controller
{
    
    public function nosotros(){
      $nombre='Merquis';
      return view('nosotros')->with([
        'nombre' =>'Merquis',
        'empresa' => 'Guiahosting']);
    }

        public function contacto(){
      $nombre='Merquis';
      return view('contacto')->with([
        'nombre' =>'Merquis',
        'empresa' => 'Guiahosting']);
    }


}