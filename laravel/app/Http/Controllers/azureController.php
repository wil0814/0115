<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\azure;

class azureController extends Controller
{
	public function azure(){
	
	  $azure = azure::all();
	  return $azure;
	
	}
}
