<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QRCode;

class QRController extends Controller
{
    public function make()
	 {
	 	$file = public_path('qr.png');
		 return QRCode::text('Hello click me')->setOutfile($file)->png();
	 }
}


