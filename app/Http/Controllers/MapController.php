<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class MapController extends Controller
{

public function index()
{
	Mapper::map(-0.9402077,100.2511818);
	return view('map');
    //-0.9402077,100.2511818
}
	
}
