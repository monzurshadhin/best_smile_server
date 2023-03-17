<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function services(){
        return Services::all();
    }
    public function services_details(Request $request){
        return Services::find($request->service_id);
    }

}
