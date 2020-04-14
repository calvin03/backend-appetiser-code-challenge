<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Response;

class EventController extends Controller
{

    public function getAllEvents(){

        $all_events = Event::all();

        if(count($all_events) > 0){

            return Response::json([
            'data' => $all_events
            ], 201);
        }

        else {
            return Response::json([
                'data' => "No Event Found"
            ], 200);
        }









    }

    public function addEvent(Request $request){


        $add_event = new Event();
        $add_event->title = $request->eventForm['event'];
        $add_event->start = $request->eventForm['from'];
        $add_event->end = $request->eventForm['to'];

        if($add_event->save()){
            return Response::json([
                'data' => "Add Event Successful"
            ], 200);
        }
        else{
            return Response::json([
                'data' => "Add Event Not Added"
            ], 200);
        }

    }
}
