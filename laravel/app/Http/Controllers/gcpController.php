<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gcp;

class gcpController extends Controller
{
       public function gcp(){
         
         $gcp = gcp::all();
	 return $gcp;
       
       
       
       }
}
