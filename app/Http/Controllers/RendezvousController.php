<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Time;


class RendezvousController extends Controller
{

    // @return \Illuminate\Http\Response
    //  */
    public function index()
    {
        $date = Time::select( "id","date_time")->get();
        return response() -> json($date);
    }


    public function getDataByUserId($userId)
    {
        $date = Time::select( "id","date_time")
        ->where('user_id', $userId)
        ->get();
        return response() -> json($date);
    }


    public function store(Request $request)
    {

        $request->validate([
            'date_time' => 'required',
        ]);
            
        
    
      
        $user = Auth::user();
        $dateTime = $request->input('date_time');

        $time = new Time();
        $time->date_time = $dateTime;
        $time->user_id = $user->id;
        $time->save();
        
        // Save the date and time to your database or perform any other desired actions

        return response()->json(['success' => true]);
    }

    public function destroy(Time $time)
    {
        $time ->delete();
        return response()->json([
            'message'=>'Time deleted successful'
        ]);
    }

   
}
