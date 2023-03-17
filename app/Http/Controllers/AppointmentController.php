<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function addAppointment(Request $request){
        $appointment =  new Appointment();
        $appointment->firstName = $request->firstName;
        $appointment->lastName = $request->lastName;
        $appointment->serviceId = $request->serviceId;
        $appointment->serviceTitle = $request->serviceTitle;
        $appointment->email = $request->email;
        $appointment->Number = $request->Number;
        $appointment->gender = $request->gender;
        $appointment->city = $request->city;
        $appointment->country = $request->country;
        $appointment->zip = $request->zip;
        $appointment->day = $request->day;
        $appointment->time = $request->time;
        $appointment->save();
    }
    public function getAppointment(){
        return Appointment::all();
    }
    public function deleteAppointment(Request $request){
//        return 'de';
        $appointment = Appointment::find($request->appointment_id);

        $result = $appointment->delete();
        if ($result){
            return ["result"=> "successfully deleted"];
        }
        else{
            return ["result"=> "Operation failed"];
        }
    }

    public function appointment_details(Request $request)
    {
        return Appointment::find($request->appointment_id);
    }

    public function appointment_update($appointment_id,Request $request)
    {
//        return $request->input();
        $appointment =  Appointment::find($appointment_id);
        $appointment->firstName = $request->firstName;
        $appointment->lastName = $request->lastName;
        $appointment->serviceId = $request->serviceId;
        $appointment->serviceTitle = $request->serviceTitle;
        $appointment->email = $request->email;
        $appointment->Number = $request->Number;
        $appointment->gender = $request->gender;
        $appointment->city = $request->city;
        $appointment->country = $request->country;
        $appointment->zip = $request->zip;
        $appointment->day = $request->day;
        $appointment->time = $request->time;
        $appointment->save();
//        return $appointment;
    }
}
