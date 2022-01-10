<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aws;
use View;
class awsController extends Controller
{
	public function aws(){
	  $aws = aws::all();
	  return $aws;
	
	}
}
